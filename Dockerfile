FROM php:8.2-apache

# --- Install PHP extensions and utilities ---
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    net-tools \
    && docker-php-ext-install pdo pdo_mysql zip

# --- Enable Apache mod_rewrite for Laravel routes ---
RUN a2enmod rewrite

# --- Install Composer (copy from official image) ---
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# --- Set working directory ---
WORKDIR /var/www/html

# --- Copy project files ---
COPY . .

# --- Set correct permissions for Laravel ---
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# --- Install Laravel dependencies ---
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# --- Laravel optimization commands ---
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan config:cache

# --- Set Apache DocumentRoot ke /public ---
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# --- Tambah ServerName biar gak warning ---
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# --- Debug file presence (optional for debugging) ---
RUN echo "== VIEW FILES ==" && find resources/views -type f
RUN echo "== PUBLIC FILES ==" && ls -la public

# --- Copy & allow custom entrypoint script ---
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# --- Railway will assign PORT via env, default expose 8080 ---
EXPOSE 8080

# --- Start entrypoint and Apache ---
ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2ctl", "-D", "FOREGROUND"]