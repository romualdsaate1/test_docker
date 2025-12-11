FROM php:8.3-fpm
WORKDIR "/app"

RUN apt-get update

RUN apt-get install -y libzip-dev zip

RUN docker-php-ext-install zip pdo pdo_mysql mysqli

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Cleanup
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
