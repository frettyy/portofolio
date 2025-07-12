#!/bin/bash

# Jika Railway memberikan PORT, gunakan untuk Apache
if [ -n "$PORT" ]; then
  echo "==> Menggunakan PORT dari environment: $PORT"
  sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
  sed -i "s|<VirtualHost \*:80>|<VirtualHost *:${PORT}>|" /etc/apache2/sites-available/000-default.conf
else
  echo "⚠️  WARNING: PORT is not set in environment! Using default port 80"
fi

# Tambahan opsional: pastikan Laravel storage permission aman
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache 2>/dev/null || true

# Jalankan perintah utama (apache2ctl -D FOREGROUND)
exec "$@"