FROM php:8.2-fpm

# -------------------------------
# System dependencies
# -------------------------------
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libpq-dev \
    zip \
    nodejs \
    npm \
    && docker-php-ext-install \
        pdo_pgsql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        zip

# -------------------------------
# Install Composer
# -------------------------------
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# -------------------------------
# Working directory
# -------------------------------
WORKDIR /var/www/html

# -------------------------------
# Copy application code
# -------------------------------
COPY . .

# -------------------------------
# Install PHP dependencies
# -------------------------------
RUN composer install --no-dev --optimize-autoloader

# -------------------------------
# Build frontend assets (Vite)
# -------------------------------
RUN npm install && npm run build

# -------------------------------
# Permissions
# -------------------------------
RUN chmod -R 775 storage bootstrap/cache

# -------------------------------
# Create startup script
# -------------------------------
RUN echo '#!/bin/sh\n\
set -e\n\
echo "Starting Laravel..."\n\
php artisan key:generate --force || true\n\
php artisan config:clear || true\n\
php artisan cache:clear || true\n\
php artisan config:cache || true\n\
php artisan migrate --force || true\n\
php artisan db:seed --force || true\n\
php artisan serve --host=0.0.0.0 --port=10000' \
> /start.sh && chmod +x /start.sh

# -------------------------------
# Expose Render port
# -------------------------------
EXPOSE 10000

# -------------------------------
# Start container
# -------------------------------
ENTRYPOINT ["/start.sh"]
