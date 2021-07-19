FROM debian:buster
RUN apt-get update -y && apt-get upgrade -y \
    && apt-get install -y php-json php-mbstring php-mysql \
    php-xml php-fpm wget php-curl php-gd dnsutils \
    && mkdir /run/php
WORKDIR /opt
RUN wget https://wordpress.org/latest.tar.gz \
    && tar -zxvf latest.tar.gz && rm latest.tar.gz
WORKDIR /opt/wordpress
EXPOSE 9000
CMD ["php", "-S", "0.0.0.0:9000"]
