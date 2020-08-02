FROM php:7.4.8-apache

ARG DEBIAN_FRONTEND=noninteractive

ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

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

RUN pecl install xdebug \
&& docker-php-ext-enable xdebug \
&& echo "xdebug.remote_enable=on" >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini \
&& echo "xdebug.remote_handler=dbgp" >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini \
&& echo "xdebug.remote_port=9000" >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini \
&& echo "xdebug.remote_autostart=on" >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini \
&& echo "xdebug.remote_connect_back=1" >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini \
&& echo "xdebug.idekey=docker" >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini \
&& echo "xdebug.remote_log=/tmp/xdebug.log" >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini \
&& echo "xdebug.max_nesting_level=1500" >> $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini

RUN cp "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

RUN a2enmod rewrite

RUN sed -ri -e 's!memory_limit = 128M!memory_limit = 300M!g' $PHP_INI_DIR/php.ini

