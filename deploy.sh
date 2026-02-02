#!/bin/bash

# =============================================================================
# Production Deployment Script for Siloam College Website
# =============================================================================
# Usage: ./deploy.sh
# Run this script on your production server after pulling the latest code.
# =============================================================================

set -e  # Exit on any error

echo "=========================================="
echo "Starting production deployment..."
echo "=========================================="

# Check if we're in the right directory
if [ ! -f "artisan" ]; then
    echo "Error: artisan file not found. Please run this script from the Laravel root directory."
    exit 1
fi

# Check if .env exists
if [ ! -f ".env" ]; then
    echo "Error: .env file not found. Please copy .env.production to .env and configure it."
    exit 1
fi

# Step 1: Put application in maintenance mode
echo ""
echo "[1/8] Enabling maintenance mode..."
php artisan down --retry=60

# Step 2: Pull latest code (if using git)
# echo ""
# echo "[2/8] Pulling latest code..."
# git pull origin main

# Step 3: Install/update dependencies (no dev dependencies in production)
echo ""
echo "[2/8] Installing dependencies..."
composer install --no-dev --optimize-autoloader

# Step 4: Run database migrations
echo ""
echo "[3/8] Running database migrations..."
php artisan migrate --force

# Step 5: Clear and rebuild caches
echo ""
echo "[4/8] Clearing old caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

echo ""
echo "[5/8] Building optimized caches..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Step 6: Optimize autoloader
echo ""
echo "[6/8] Optimizing application..."
php artisan optimize

# Step 7: Set proper permissions
echo ""
echo "[7/8] Setting file permissions..."
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache 2>/dev/null || true

# Step 8: Bring application back online
echo ""
echo "[8/8] Disabling maintenance mode..."
php artisan up

echo ""
echo "=========================================="
echo "Deployment completed successfully!"
echo "=========================================="
echo ""
echo "Post-deployment checklist:"
echo "  [ ] Verify application is accessible"
echo "  [ ] Check error logs: tail -f storage/logs/laravel.log"
echo "  [ ] Test critical functionality (forms, navigation)"
echo "  [ ] Monitor server resources"
echo ""
