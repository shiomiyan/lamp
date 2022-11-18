FROM php:7.2-apache

RUN apt-get update \
    && docker-php-ext-install pdo_mysql mysqli mbstring

RUN rm -rf /var/lib/apt/lists/* \
    && a2enmod ssl \
    && a2enmod rewrite

EXPOSE 80
