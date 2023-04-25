#syntax=docker/dockerfile:1.4

# The different stages of this Dockerfile are meant to be built into separate images
# https://docs.docker.com/develop/develop-images/multistage-build/#stop-at-a-specific-build-stage
# https://docs.docker.com/compose/compose-file/#target

# Builder images
FROM composer/composer:2-bin AS composer

FROM mlocati/php-extension-installer:latest AS php_extension_installer

# Build Caddy with the Mercure and Vulcain modules
FROM caddy:2.6-builder-alpine AS app_caddy_builder

RUN xcaddy build \
	--with github.com/dunglas/mercure \
	--with github.com/dunglas/mercure/caddy \
	--with github.com/dunglas/vulcain \
	--with github.com/dunglas/vulcain/caddy

# Dev image

FROM php:8.1-fpm-alpine AS app_php

ENV APP_ENV=dev XDEBUG_MODE=off

WORKDIR /srv/app

# php extensions installer: https://github.com/mlocati/docker-php-extension-installer
COPY --from=php_extension_installer --link /usr/bin/install-php-extensions /usr/local/bin/

# persistent / runtime deps
RUN apk add --no-cache \
		acl \
		fcgi \
		file \
		gettext \
		git \
	;

RUN set -eux; \
    install-php-extensions \
		apcu \
		intl \
		opcache \
		zip \
    	xdebug \
    ;


#RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
COPY --link docker/php/conf.d/app.ini $PHP_INI_DIR/conf.d/
#COPY --link docker/php/conf.d/app.prod.ini $PHP_INI_DIR/conf.d/

COPY --link docker/php/php-fpm.d/zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf
RUN mkdir -p /var/run/php

COPY --link docker/php/docker-healthcheck.sh /usr/local/bin/docker-healthcheck
RUN chmod +x /usr/local/bin/docker-healthcheck

HEALTHCHECK --interval=10s --timeout=3s --retries=3 CMD ["docker-healthcheck"]

COPY --link docker/php/docker-entrypoint.sh /usr/local/bin/docker-entrypoint
RUN chmod +x /usr/local/bin/docker-entrypoint

ENTRYPOINT ["docker-entrypoint"]
CMD ["php-fpm"]

## https://getcomposer.org/doc/03-cli.md#composer-allow-superuser
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV PATH="${PATH}:/root/.composer/vendor/bin"

COPY --from=composer --link /composer /usr/bin/composer

# prevent the reinstallation of vendors at every changes in the source code
COPY --link composer.* symfony.* ./
RUN set -eux; \
    if [ -f composer.json ]; then \
		composer install --prefer-dist --no-dev --no-autoloader --no-scripts --no-progress; \
		composer clear-cache; \
    fi

# copy sources
COPY --link  . ./
RUN rm -Rf docker/

RUN set -eux; \
	mkdir -p var/cache var/log; \
    if [ -f composer.json ]; then \
		composer dump-autoload --classmap-authoritative --no-dev; \
		composer dump-env prod; \
		composer run-script --no-dev post-install-cmd; \
		chmod +x bin/console; sync; \
    fi

# Dev image
#FROM app_php AS app_php_dev
#
#ENV APP_ENV=dev XDEBUG_MODE=off
#VOLUME /srv/app/var/
#
#RUN rm "$PHP_INI_DIR/conf.d/app.prod.ini"; \
#	mv "$PHP_INI_DIR/php.ini" "$PHP_INI_DIR/php.ini-production"; \
#	mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
#
#COPY --link docker/php/conf.d/app.dev.ini $PHP_INI_DIR/conf.d/
#
#RUN set -eux; \
#	install-php-extensions \
#    	xdebug \
#    ;

RUN rm -f .env.local.php

ARG LICENSE_KEY
# New Relic PHP Agent configuration

#RUN sed -i "s/^newrelic.appname = .*/newrelic.appname = \"${NEWRELIC_APPNAME}\"/g" /usr/local/etc/php/conf.d/newrelic.ini
#RUN sed -i "s/^newrelic.license = .*/newrelic.license = \"${NEWRELIC_LICENSE}\"/g" /usr/local/etc/php/conf.d/newrelic.ini
RUN curl -L https://download.newrelic.com/php_agent/archive/10.2.0.314/newrelic-php5-10.2.0.314-linux.tar.gz | tar -C /tmp -zx \
    && export NR_INSTALL_USE_CP_NOT_LN=1 \
    && export NR_INSTALL_SILENT=1 \
    && /tmp/newrelic-php5-10.2.0.314-linux/newrelic-install install \
    && rm -rf /tmp/newrelic-php5-* /tmp/nrinstall*

#RUN sed -i \
#    -e "s/newrelic.license =.*/newrelic.license = ${NEW_RELIC_LICENSE_KEY}/" \
#    -e "s/newrelic.appname =.*/newrelic.appname = ${NEW_RELIC_APP_NAME}/" \
#    /usr/local/etc/php/conf.d/newrelic.ini

# LICENSE KEY HARDCODED for now this LICENSE-KEY has to be replaced with the one that belong to your account
RUN sed -i -e "s/REPLACE_WITH_REAL_KEY/LICENSE-KEY/" \
    -e "s/newrelic.appname[[:space:]]=[[:space:]].*/newrelic.appname=\"PHP-SDK\"/" \
    -e '$anewrelic.daemon.address="newrelic-php-daemon:31339"' \
    /usr/local/etc/php/conf.d/newrelic.ini




# Caddy image
FROM caddy:2.6-alpine AS app_caddy

WORKDIR /srv/app

COPY --from=app_caddy_builder --link /usr/bin/caddy /usr/bin/caddy
COPY --from=app_php --link /srv/app/public public/
COPY --link docker/caddy/Caddyfile /etc/caddy/Caddyfile
