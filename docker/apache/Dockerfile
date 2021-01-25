FROM debian:10
FROM php:8.0.1-apache
RUN apt-get update -y; \
    apt-get upgrade -y;
COPY virtual-pinboard.apache.conf /etc/apache2/sites-enabled/000-default.conf
COPY apache2.conf /usr/local/apache2/conf/apache2.conf


RUN echo "Include /usr/local/apache2/conf/apache2.conf" \
    >> /usr/local/apache2/conf/httpd.conf
RUN a2enmod rewrite
# RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql