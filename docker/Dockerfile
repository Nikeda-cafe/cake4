FROM php:7.3-apache

RUN apt-get update \
    && apt-get install -y unzip libicu-dev \
    && docker-php-ext-install intl \
    && docker-php-ext-install pdo_mysql \
    && a2enmod rewrite \
    && apt-get clean \
    && rm -fr /var/lib/apt/lists/*
    && git clone https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis \
    && docker-php-ext-install redis

