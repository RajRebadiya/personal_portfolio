# Stage 1: Composer Dependencies
FROM composer:2 AS vendor
WORKDIR /app
COPY . .
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader --no-scripts
# Stage 2: Application Container
FROM php:8.1-fpm
# System dependencies install
RUN apt-get update && apt-get install -y \
 git curl zip unzip libpng-dev libzip-dev libonig-dev nginx \
 && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd \
 && rm -rf /var/lib/apt/lists/*
WORKDIR /var/www/html
# Application code copy
COPY . .
COPY --from=vendor /app/vendor ./vendor
# Permissions set
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache
# Nginx config copy
COPY ./nginx.conf /etc/nginx/sites-available/default
EXPOSE 80

# Start services
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]
