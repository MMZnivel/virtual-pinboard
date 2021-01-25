# virtual-pinboard

## WIP

## using apache2-2.4.38, php-8.0.1 and mysql-8.0.22
## with Lumen-8.2.1 

## Getting started
When images are build, connect to "apache" container with
docker-compose exec apache bash
and then change owner rights for lumen log files
chown www-data ./storage/logs

Create mysql tables:
CREATE TABLE positions
(
  id INT unsigned NOT NULL AUTO_INCREMENT,
  x INT NOT NULL,
  y INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY (`x`, `y`)
);


CREATE TABLE notes
(
  id              INT unsigned NOT NULL AUTO_INCREMENT,
  text            VARCHAR(150) NOT NULL,
  created           TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated            TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  position_id           INT unsigned NOT NULL,
  PRIMARY KEY     (`id`),
  FOREIGN KEY (`position_id`)
      REFERENCES `positions`(`id`)
      ON DELETE CASCADE
);


Add dev table entries:
INSERT INTO positions (`x`, `y`)
VALUES (1, 1); 


INSERT INTO notes (`text`, `position_id`)
VALUES ("hi", 1); 


# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).