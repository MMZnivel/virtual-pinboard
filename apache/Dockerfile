FROM debian:10
FROM php:8.0.1-apache
RUN apt-get update -y; \
    apt-get upgrade -y;
COPY virtual-pinboard.apache.conf /usr/local/apache2/conf/virtual-pinboard.apache.conf

RUN echo "Include /usr/local/apache2/conf/virtual-pinboard.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf
RUN docker-php-ext-install mysqli
