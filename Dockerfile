FROM debian:buster

COPY /srcs/* /srcs/
COPY /srcs/nginx-fpm.conf /etc/nginx/sites-available/
COPY /srcs/config.inc.php /var/www/html/phpmyadmin/

RUN apt-get update \
&& apt-get upgrade -y \
&& apt-get install -y wget \
&& apt-get install -y nginx \
&& ln -s /etc/nginx/sites-available/nginx-fpm.conf /etc/nginx/sites-enabled/ \
&& apt-get install -y mariadb-server \
&& apt-get install -y php php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cgi php-curl php-intl php-soap php-xmlrpc php-fpm php-mysql \ 
&& wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-all-languages.tar.gz \
&& tar xvf phpMyAdmin-5.1.0-all-languages.tar.gz --strip-components=1 -C /var/www/html/phpmyadmin \
&& chmod 755 /var/www/html/phpmyadmin/config.inc.php \
&& chown -R www-data:www-data /var/www/html/phpmyadmin \
&& service mysql start \
&& mariadb -u root < /var/www/html/phpmyadmin/sql/create_tables.sql \
&& mariadb -u root < /srcs/mycommands.sql \
&& wget https://wordpress.org/latest.tar.gz \
&& mkdir /var/www/html/wordpress \
&& tar xvf latest.tar.gz --strip-components=1 -C /var/www/html/wordpress \
&& cp /srcs/wp-config.php /var/www/html/wordpress/ \
&& chown -R www-data:www-data /var/www/html/wordpress \
&& mkdir /etc/nginx/ssl \
&& openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/localhost.key \
-out /etc/nginx/ssl/localhost.pem -subj "/C=FR/ST=Lyon/L=Lyon/O=42 School/OU=adel-sol/CN=localhost" 

EXPOSE 80 443

CMD ["/bin/bash", "/srcs/start.sh"]
