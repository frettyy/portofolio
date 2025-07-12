#!/bin/bash

# Gunakan PORT dari Railway
if [ -n "$PORT" ]; then
  echo "==> Menggunakan PORT dari environment: $PORT"
  sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
  sed -i "s|<VirtualHost \*:80>|<VirtualHost *:${PORT}>|" /etc/apache2/sites-available/000-default.conf
else
  echo "==> WARNING: PORT not set in environment!"
fi

exec "$@"