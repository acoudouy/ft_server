FROM    debian:buster

#Installing packages needed
RUN 	apt-get -y update; \
	 	apt-get -y upgrade; \
		apt-get install -y nginx mariadb-server mariadb-client; \ 
	 	apt-get install -y php php-fpm php-mysql php-cli php-mbstring php-gd php-curl php-json; \
	 	apt-get install -y wget vim libnss3-tools; 

#Creating a Nginx Server Block
COPY 	srcs/default /etc/nginx/sites-enabled/default
COPY 	srcs/database_init /database_init
COPY 	srcs/php.ini /etc/php/7.3/fpm/php.ini
RUN 	service mysql start && mysql -uroot -proot mysql < "/database_init"

#Installing Phpmyadmin
RUN 	wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz; \
		tar -zxvf phpMyAdmin-4.9.0.1-all-languages.tar.gz; \
		mv phpMyAdmin-4.9.0.1-all-languages phpmyadmin; \
		mv phpmyadmin /var/www/html;
COPY 	srcs/config.inc.php var/www/html/phpmyadmin/config.inc.php

#Installing Wordpress
RUN 	wget http://fr.wordpress.org/latest-fr_FR.tar.gz; \
		tar -xzvf latest-fr_FR.tar.gz; \ 
		rm latest-fr_FR.tar.gz; \ 
		mv wordpress /var/www/html;
COPY 	srcs/wordpress_config.php var/www/html/wordpress/wwordpress_config.php;

#SSL Certificate
RUN 	wget https://github.com/FiloSottile/mkcert/releases/download/v1.1.2/mkcert-v1.1.2-linux-amd64; \ 
		mv mkcert-v1.1.2-linux-amd64 mkcert; \
		chmod +x mkcert;
EXPOSE 	80 443

RUN 	chown -R www-data:www-data /var/www/html/phpmyadmin; \
	 	chmod -R 755 /var/www/html/phpmyadmin; \
	 	chown -R www-data:www-data /var/www/html/wordpress/; \
	 	chmod -R 755 /var/www/html/wordpress/; \
	 	chown -R www-data:www-data /var/www/*; \
	 	chmod -R 755 /var/www/*

COPY 	srcs/start.sh /start.sh

CMD 	["sh", "/start.sh"]
