if [ "$autoindex" == "off" ]
then
	sed -i "s/autoindex on;/autoindex off;/" /etc/nginx/sites-available/nginx-fpm.conf
fi
service nginx start
service mysql start
service php7.3-fpm start
sleep infinity