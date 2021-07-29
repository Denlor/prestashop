FROM php:7.3-fpm

# Copy scripts to be available globally
COPY ./docker/php-fpm/scripts /usr/local/bin
#RUN add-apt-repository ppa:openjdk-r/ppa
# Install docker extensions and set script permissions
RUN mkdir -p /usr/share/man/man1
RUN apt-get update && apt-get install -qy --no-install-recommends \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmagickwand-dev \
    libmcrypt-dev \
    libgmp-dev\
    libpng-dev \
    zlib1g-dev \
    libxml2-dev \
    libzip-dev \
    libonig-dev \
    curl \
    openssl \
    zip \
    unzip   

RUN docker-php-ext-configure gd

RUN apt-get update && \    
    docker-php-ext-install pdo pdo_mysql zip dom fileinfo gd iconv intl json simplexml
    
RUN apt-get clean

# Install composer
RUN curl --silent --show-error https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

WORKDIR /var/www