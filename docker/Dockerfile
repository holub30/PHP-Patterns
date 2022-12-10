FROM php:8.1

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www

CMD [ "php", "-S", "0.0.0.0:8080", "-t", "/var/www/src"]