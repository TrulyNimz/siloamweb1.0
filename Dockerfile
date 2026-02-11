FROM php:8.2-cli

# System dependencies
RUN apt-get update && apt-get install -y \
    git unzip curl nodejs npm \
    libpng-dev libonig-dev libxml2-dev libzip-dev libpq-dev \
    && rm -rf /var/lib/apt/lists/*

# PHP extensions
RUN docker-php-ext-install \
    pdo_pgsql pdo_mysql mbstring exif pcntl bcmath gd zip

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# App directory
WORKDIR /var/www/html

# Copy project
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Permissions and storage setup
RUN chmod -R 775 storage bootstrap/cache \
    && mkdir -p storage/logs \
    && touch storage/logs/laravel.log \
    && chmod -R 775 storage/logs

# Railway uses dynamic PORT env variable
ENV PORT=8000
EXPOSE ${PORT}

# Start: cache config, migrate, then serve on Railway's PORT
CMD php artisan config:cache \
 && php artisan route:cache \
 && php artisan view:cache \
 && php artisan migrate --force \
 && php artisan storage:link \
 && php artisan serve --host=0.0.0.0 --port=${PORT}
