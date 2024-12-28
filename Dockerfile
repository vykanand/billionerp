FROM php:5.6-apache

# Replace the Debian Stretch repositories with the archived ones
RUN sed -i 's|http://deb.debian.org/debian|http://archive.debian.org/debian|g' /etc/apt/sources.list \
    && sed -i 's|http://security.debian.org/debian-security|http://archive.debian.org/debian-security|g' /etc/apt/sources.list

# Enable Apache modules and PHP extensions
RUN a2enmod expires rewrite
RUN docker-php-ext-install mysqli pdo pdo_mysql opcache

# Copy PHP and Apache configurations
# Copy php.ini to the appropriate location in the container
COPY php.ini /usr/local/etc/php/

# Copy .htaccess to the root of the web directory in the container
COPY .htaccess /var/www/html/
COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Set PHP OPcache settings
RUN echo "opcache.enable=1" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.memory_consumption=128" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.interned_strings_buffer=8" >> /usr/local/etc/php/conf.d/opcache.ini \
    && echo "opcache.max_accelerated_files=4000" >> /usr/local/etc/php/conf.d/opcache.ini

# Set the working directory
WORKDIR /var/www/html

# Expose port 80 to the outside world
EXPOSE 80
