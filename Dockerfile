FROM php:7.0-apache
MAINTAINER yu-takeda

COPY config/php.ini /usr/local/etc/php/
COPY src/ /var/www/html/
