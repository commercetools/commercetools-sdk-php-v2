FROM php:8.2-fpm

ARG NEW_RELIC_AGENT_VERSION=10.10.0.1
ARG NEW_RELIC_LICENSE_KEY=${NEW_RELIC_LICENSE_KEY}
ARG NEW_RELIC_APPNAME=PHP-SDK

# Install necessary dependencies
RUN apt-get update && apt-get install -y \
    curl \
    libcurl4-openssl-dev \
    build-essential

# Download and install the New Relic agent
RUN curl -L https://download.newrelic.com/php_agent/archive/${NEW_RELIC_AGENT_VERSION}/newrelic-php5-${NEW_RELIC_AGENT_VERSION}-linux.tar.gz -o /tmp/newrelic.tar.gz \
    && tar -C /tmp -zxvf /tmp/newrelic.tar.gz \
    && export NR_INSTALL_USE_CP_NOT_LN=1 \
    && export NR_INSTALL_SILENT=1 \
    && /tmp/newrelic-php5-${NEW_RELIC_AGENT_VERSION}-linux/newrelic-install install

# Manually copy the .so file to the correct extension directory
RUN cp /tmp/newrelic-php5-${NEW_RELIC_AGENT_VERSION}-linux/agent/x64/newrelic-*.so $(php -r "echo ini_get('extension_dir');")/

# Set up the New Relic configuration
RUN echo "newrelic.license = ${NEW_RELIC_LICENSE_KEY}" >> /usr/local/etc/php/conf.d/newrelic.ini \
    && echo "newrelic.appname = ${NEW_RELIC_APPNAME}" >> /usr/local/etc/php/conf.d/newrelic.ini \
    && echo "newrelic.daemon.address=newrelic-daemon:31339" >> /usr/local/etc/php/conf.d/newrelic.ini \
    && echo "newrelic.daemon.max_payload_size=10485760" >> /usr/local/etc/php/conf.d/newrelic.ini

# Set the working directory
WORKDIR /var/www/symfony

# Expose the PHP-FPM port
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm", "-F"]
