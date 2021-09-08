FROM php:7.4.14-fpm-alpine3.11

ENV COMPOSER_HOME=/usr/local/composer \
    PATH=/usr/local/composer/vendor/bin:$PATH

WORKDIR /usr/src/app
COPY src .

RUN apk add --no-cache --virtual .build-deps \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && chmod 755 /usr/local/bin/composer \
    && chown www-data:www-data $COMPOSER_HOME \
    && chown www-data:www-data $COMPOSER_HOME -R \
    && chmod 775 $COMPOSER_HOME \
    && chmod 775 $COMPOSER_HOME -R \
    && /usr/local/bin/composer install --ignore-platform-reqs \
    && rm -rf /var/lib/apt/lists/*

CMD [ "php -S 0.0.0.0:5080"]