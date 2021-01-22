# virtual-pinboard

## WIP

# using apache2-2.4.38, php-8.0.1 and mysql-8.0.22
# with Lumen-8.2.1 

## Getting started
When images are build, connect to "apache" container with
docker-compose exec apache bash
and then change owner rights for lumen log files
chown www-data ./storage/logs