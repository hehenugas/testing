FROM php:8.2-fpm

ARG user=myuser
ARG uid=1000

# Install dependencies
RUN apt update && apt install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    unzip \
    && apt clean && rm -rf /var/lib/apt/lists/*

# Install PHP Extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Buat user di dalam container
RUN useradd -G www-data,root -u $uid -d /home/$user $user \
    && mkdir -p /home/$user/.composer \
    && chown -R $user:$user /home/$user

# Set working directory
WORKDIR /var/www

# **Tambahkan safe directory untuk Git**
RUN git config --global --add safe.directory /var/www

# Salin kode proyek dengan pemilik yang benar
COPY --chown=$user:$user . /var/www

# Pastikan izin storage dan cache benar
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# **Jalankan Composer sebagai user yang benar**
# USER $user
RUN composer install --no-ansi --no-dev --no-interaction --no-plugins --no-progress --no-scripts --optimize-autoloader

# Kembalikan user ke root untuk menjalankan php-fpm
USER root

# Jalankan entrypoint untuk memastikan izin runtime benar
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["php-fpm"]