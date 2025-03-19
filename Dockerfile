FROM php:8.1-fpm

ENV http_proxy http://proxy.dsi.scom:8080
ENV https_proxy http://proxy.dsi.scom:8080
ENV no_proxy .scom,.comon,.sagem,localhost,127.0.0.1

RUN apt update && apt-get install -y lsb-release && apt-get clean all \
    && apt install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip curl mlocate software-properties-common libldb-dev libldap2-dev libpng-dev \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    # && pecl install apcu-5.1.21 \
    # && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip \
    && docker-php-ext-configure gd \
    && docker-php-ext-install gd \
    && docker-php-ext-configure ldap \
    && docker-php-ext-install ldap

RUN mkdir -p /root/.symfony5/bin/

WORKDIR /var/www/redblosymfo

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -sS https://get.symfony.com/cli/installer | bash
RUN mv /root/.symfony5/bin/symfony /usr/local/bin/symfony
RUN git config --global user.email "youremail@gmail.com" \
    && git config --global user.name "Your Username"


RUN curl -fsSL https://deb.nodesource.com/setup_21.x | bash -
RUN apt-get install -y nodejs
# RUN npm install

RUN updatedb
RUN git config --global http.sslVerify false