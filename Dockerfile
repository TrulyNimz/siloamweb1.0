FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libpq-dev \
    zip \
    curl \
    nodejs \
    npm

# PHP extensions
RUN docker-php-ext-install \
    pdo_pgsql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy project
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Permissions
RUN chmod -R 775 storage bootstrap/cache

# Create entrypoint (CRITICAL)
RUN echo '#!/bin/sh\n\
set -e\n\
php artisan key:generate --force || true\n\
php artisan config:clear || true\n\
php artisan cache:clear || true\n\
php artisan config:cache || true\n\
php artisan migrate --force || true\n\
php artisan serve --host=0.0.0.0 --port=10000' \
> /entrypoint.sh && chmod +x /entrypoint.sh

EXPOSE 10000

<<<<<<< HEAD
ENTRYPOINT ["/entrypoint.sh"]
=======
ENTRYPOINT ["/entrypoint.sh"]
>>>>>>> 22817b7 (team)
