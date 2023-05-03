FROM nginx

COPY symfony.conf /etc/nginx/conf.d/default.conf

RUN echo "upstream php-upstream { server application:9000; }" > /etc/nginx/conf.d/upstream.conf

RUN usermod -u 1000 www-data
