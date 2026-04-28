FROM php:8.4-fpm                                      
RUN apt-get update && apt-get install -y curl unzip git \
 && docker-php-ext-install pdo pdo_mysql                              
RUN curl -sS https://getcomposer.org/installer | php \
 && mv composer.phar /usr/local/bin/composer