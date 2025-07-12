FROM php:8.2-apache

# Install PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql zip

# Enable Apache rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy Laravel project
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install Laravel dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Set Apache to serve Laravel from public/
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Debug file output
RUN echo "== /var/www/html ==" && ls -la /var/www/html
RUN echo "== /var/www/html/public ==" && ls -la /var/www/html/public

# Tambahkan ServerName untuk hilangkan warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Expose port 8080 (Railway default)
EXPOSE 8080

# Jalankan Apache
CMD ["apache2ctl", "-D", "FOREGROUND"]
    