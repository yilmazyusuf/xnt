FROM php:7.4-fpm
RUN docker-php-ext-install pdo_mysql
RUN pecl install apcu
RUN apt-get update && \
    apt-get install -y \
    libzip-dev \
    git \
    wget
RUN docker-php-ext-install zip
RUN docker-php-ext-enable apcu

RUN PATH=$PATH:/usr/src/app/vendor/bin:bin
COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /var/www

EXPOSE 9000
