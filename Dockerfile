# syntax=docker/dockerfile:1
FROM php:7.4-apache
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN a2enmod rewrite
COPY ./site /var/www/html
USER www-data
