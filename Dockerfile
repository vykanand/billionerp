FROM php:5.6-apache

# Enable Apache modules and PHP extensions
RUN a2enmod expires rewrite
RUN docker-php-ext-install mysqli pdo pdo_mysql opcache
RUN apt-get update && apt-get install -y bash

# Copy optimized PHP configuration
COPY php.ini /usr/local/etc/php/
COPY .htaccess /var/www/html/

# Set PHP OPcache settings
RUN echo "opcache.enable=1" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.memory_consumption=128" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.interned_strings_buffer=8" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.max_accelerated_files=4000" >> /usr/local/etc/php/conf.d/opcache.ini

WORKDIR /var/www/html
