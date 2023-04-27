FROM php:8.2-fpm

ARG NEWRELIC_KEY
ARG NEWRELIC_APP_NAME

RUN apt-get update \
    && apt-get install -y apt-utils \
    && apt-get install -y wget git curl libicu-dev zlib1g-dev libonig-dev libzip-dev gnupg2 \
    && docker-php-ext-install intl \
    && docker-php-ext-install mbstring \
    && docker-php-ext-install zip \
    && apt-get clean

RUN echo 'deb http://apt.newrelic.com/debian/ newrelic non-free' | tee /etc/apt/sources.list.d/newrelic.list
RUN wget -qO - https://download.newrelic.com/548C16BF.gpg | apt-key add -
RUN apt-get update \
    && whoami \
    && apt-get install -y newrelic-php5 net-tools inetutils-ping inetutils-telnet newrelic-daemon \
    && apt-get clean \



RUN usermod -u 1000 www-data

ADD conf.d/newrelic.ini /usr/local/etc/php/conf.d/
ADD conf.d/60-user.ini /usr/local/etc/php/conf.d/

RUN sed -i \
   -e 's/"REPLACE_WITH_REAL_KEY"/'"$NEWRELIC_KEY"'/' \
   -e 's/newrelic.appname = "PHP Application"/newrelic.appname = '"$NEWRELIC_APP_NAME"'/' \
   -e 's/;newrelic.daemon.app_connect_timeout =.*/newrelic.daemon.app_connect_timeout=20s/' \
   -e 's/;newrelic.daemon.start_timeout =.*/newrelic.daemon.start_timeout=20s/' \
   /usr/local/etc/php/conf.d/newrelic.ini

WORKDIR /var/www/symfony/public

EXPOSE 9000

CMD ["php-fpm", "-F"]
