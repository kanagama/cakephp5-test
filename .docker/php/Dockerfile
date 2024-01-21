FROM php:8.3.2-fpm
COPY ./php.ini /usr/local/etc/php/

RUN apt-get update && \
    apt-get install -y git curl zip unzip libonig-dev libicu-dev && \
    docker-php-ext-install pdo_mysql mbstring intl

# RUN apt-get update
# RUN apt-get install -y git
# RUN apt-get install -y curl
# RUN apt-get install -y zip
# RUN apt-get install -y unzip
# # mbstring インストールに必要なパッケージ
# RUN apt-get install -y libonig-dev
# # intl インストールに必要なパッケージ
# RUN apt-get install -y libicu-dev
# RUN docker-php-ext-install pdo_mysql
# RUN docker-php-ext-install mbstring
# RUN docker-php-ext-install intl

WORKDIR /var/www/html