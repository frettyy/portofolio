FROM php:8.2-apache

# Install PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    net-tools \
    && docker-php-ext-install pdo pdo_mysql zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files to Apache root
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install Laravel dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Set file permissions (important!)
RUN chown -R www-data:www-data storage bootstrap/cache

# Laravel Artisan cache clear & optimize
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan config:cache

# Set Apache DocumentRoot ke folder public/
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Tambah ServerName biar tidak warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Debug listing (opsional, boleh hapus di production)
RUN echo "== FILES IN /var/www/html ==" && ls -la /var/www/html
RUN echo "== FILES IN /var/www/html/public ==" && ls -la /var/www/html/public

# Salin entrypoint.sh ke container
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Railway expose port via ENV
EXPOSE 8080

# Jalankan entrypoint dan Apache
ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2ctl", "-D", "FOREGROUND"]