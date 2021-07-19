FROM debian:buster
RUN groupadd -r mysql && useradd -r -g mysql mysql
RUN apt-get update && \
    apt-get install -y mariadb-server wget vim
RUN find /etc/mysql/ -name '*.cnf' -print0 \
      | xargs -0 grep -lZE '^(bind-address|log|user\s)' \
      | xargs -rt -0 sed -Ei 's/^(bind-address|log|user\s)/#&/'; \
        if [ ! -L /etc/mysql/my.cnf ]; then sed -i -e '/includedir/i[mariadb]\nskip-host-cache\nskip-name-resolve\n' /etc/mysql/my.cnf; \
        else sed -i -e '/includedir/ {N;s/\(.*\)\n\(.*\)/[mariadbd]\nskip-host-cache\nskip-name-resolve\n\n\2\n\1/}' \
                /etc/mysql/mariadb.cnf; fi
EXPOSE 3306
RUN rm -rf /var/lib/mysql \
    && mkdir -p /var/lib/mysql /var/run/mysqld \
    && chown -R mysql:mysql /var/lib/mysql /var/run/mysqld \
    && chmod 777 /var/run/mysqld \
    && chown -R mysql:mysql /etc/mysql
WORKDIR /usr
RUN echo '[mysqld]\nskip-host-cache\nskip-name-resolve' > /etc/mysql/conf.d/docker.cnf
COPY ./tools/docker-entrypoint.sh /usr/local/bin/
RUN chmod a+x /usr/local/bin/docker-entrypoint.sh
USER mysql
ENTRYPOINT ["docker-entrypoint.sh"]
RUN mysql_install_db --user=mysql --basedir=/usr --datadir=/var/lib/mysql
#RUN mysql -uroot -e "CREATE DATABASE wordpress;" \
#    && mysql -uroot -e "CREATE USER IF NOT EXISTS wp_user@wordpress IDENTIFIED BY 'password';" \
#    && mysql -uroot -e "GRANT ALL ON wordpress.* TO wp_user@wordpress IDENTIFIED BY 'password';"
CMD ["mysqld"]
