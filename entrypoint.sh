#!/bin/bash

# Jika Railway memberikan PORT, gunakan untuk Apache
if [ -n "$PORT" ]; then
  echo "==> Menggunakan PORT dari environment: $PORT"
  sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
  sed -i "s|<VirtualHost \*:80>|<VirtualHost *:${PORT}>|" /etc/apache2/sites-available/000-default.conf
fi

# Eksekusi perintah utama
exec "$@"
