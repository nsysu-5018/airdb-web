FROM php:8.2-apache@sha256:caca304cba4bb8fad5d4a3e4d4539343c0219900fcd46c66b4dc98f41b1b0084

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN sed -i 's/expose_php = On/expose_php = Off/' "$PHP_INI_DIR/php.ini"

RUN sed -i 's/ServerTokens OS/ServerTokens Prod/' /etc/apache2/conf-enabled/security.conf

RUN sed -i 's/ServerSignature On/ServerSignature Off/' /etc/apache2/conf-enabled/security.conf

RUN apt-get update

RUN apt-get install libicu-dev -y

RUN docker-php-ext-configure intl

RUN docker-php-ext-install intl

RUN docker-php-ext-configure mysqli

RUN docker-php-ext-install mysqli

RUN docker-php-ext-configure opcache

RUN docker-php-ext-install opcache

RUN a2enmod rewrite

COPY --chown=www-data src/ /var/www/html/
