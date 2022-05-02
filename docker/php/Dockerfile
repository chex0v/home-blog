FROM php:8.1.4-fpm-alpine3.14

RUN docker-php-ext-install pdo pdo_mysql
USER www-data
EXPOSE 9000
CMD ["php-fpm"]