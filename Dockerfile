FROM composer:2.1.8 AS deps-php
WORKDIR /app
COPY composer.* /app/
COPY database/ /app/database/
RUN composer install --no-scripts --optimize-autoloader --ignore-platform-reqs --prefer-install=dist


FROM node:14.18 AS deps-js
WORKDIR /app
COPY package*.json /app/
RUN npm ci --unsafe-perm


FROM php:7.4-fpm
WORKDIR /var/www
COPY --from=deps-php /app /var/www
COPY --from=deps-js /app /var/www
COPY . /var/www

RUN apt-get update && apt-get install -y \
    curl \
    libpng-dev libonig-dev libxml2-dev \
    zip unzip

RUN apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && groupadd -r app \
    && useradd -m -r -g app app \
    && find . \! -user app -exec chown app '{}' +

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd
USER app
