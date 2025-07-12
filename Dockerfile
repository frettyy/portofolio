FROM php:8.2-apache

# Install PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy Laravel project files
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Update Apache DocumentRoot to point to Laravel's public folder
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# 🔧 Update Apache to use Railway's port from ENV
ENV PORT=8080
RUN sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf

# 🔧 Tambahkan ServerName untuk hilangkan warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# 🔥 Expose port yang sesuai ENV
EXPOSE ${PORT}

# 🔥 Jalankan Apache di foreground
CMD ["apache2ctl", "-D", "FOREGROUND"]
