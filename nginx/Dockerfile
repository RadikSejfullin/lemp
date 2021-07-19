FROM debian:buster
RUN apt-get update \
    && apt-get install -y nginx \
    openssl
RUN mkdir /var/run/nginx && mkdir /opt/wordpress \
    && chown -R 101:101 /var/run/nginx \
    && chown -R 101:101 /opt/wordpress
COPY tools/nginx.conf /etc/nginx/conf.d/default.conf
COPY tools/certs/server.pem /etc/nginx/ssl/server.pem
CMD nginx -g 'daemon off;'
