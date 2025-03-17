#!/bin/sh

# Perbaiki izin storage dan cache setiap container dijalankan
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache /var/www/vendor

# Jalankan perintah utama container
exec "$@"
