FROM php:7.3-fpm-alpine

COPY php.ini /usr/local/etc/php/
RUN apk add --no-cache libzip-dev && docker-php-ext-configure zip --with-libzip=/usr/include && docker-php-ext-install zip
RUN apk --no-cache update && \
    apk --no-cache upgrade && \
    apk --no-cache add \
    curl-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    libxml2-dev \
    zlib-dev \
    pcre-dev \
    g++ \
    make \
    autoconf \
    openssl \
    bash \
    vim \
    git \
    && docker-php-ext-install \
    curl \
    dom \
    mbstring \
    pdo \
    pdo_mysql \
    simplexml \
    opcache \
    && docker-php-ext-configure gd \
    --with-freetype-dir=/usr/include/ \
    --with-jpeg-dir=/usr/include/ \
    --with-png-dir=/usr/include/ \
    && docker-php-ext-install gd\
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && chmod +x /usr/local/bin/composer \
    && rm -rf /var/cache/apk/*
RUN chown -R www-data:www-data /var/www/html
WORKDIR /var/www/html