FROM php:7.4.8-apache

ARG DEBIAN_FRONTEND=noninteractive

RUN apt update && apt install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-configure exif --enable-exif \
    && docker-php-ext-install -j$(nproc) exif \
    && docker-php-ext-configure pdo_mysql --with-pdo-mysql \
    && docker-php-ext-install -j$(nproc) pdo_mysql \
    && docker-php-ext-configure mysqli --with-mysqli \
    && docker-php-ext-install -j$(nproc) mysqli

RUN pecl install xdebug;

RUN cp "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

RUN a2enmod rewrite

RUN sed -ri -e 's!memory_limit = 128M!memory_limit = 300M!g' $PHP_INI_DIR/php.ini

