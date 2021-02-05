FROM debian:10
FROM php:8.0.1-apache
RUN apt-get update -y; \
    apt-get upgrade -y; \
    apt-get install libzip-dev -y; \
    apt-get install npm -y;
COPY virtual-pinboard.apache.conf /etc/apache2/sites-enabled/000-default.conf
COPY apache2.conf /usr/local/apache2/conf/apache2.conf
COPY composer.json /var/www/html/composer.json


RUN echo "Include /usr/local/apache2/conf/apache2.conf" \
    >> /usr/local/apache2/conf/httpd.conf
RUN a2enmod rewrite
RUN docker-php-ext-install pdo pdo_mysql zip
RUN curl -s "https://composer.github.io/installer.sha384sum" -o installer.sha384sum && \
	curl -s "https://getcomposer.org/installer" -o composer-setup.php && \
	sha384sum --check installer.sha384sum && \
	php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
	rm composer-setup.php installer.sha384sum