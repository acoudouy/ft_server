./mkcert -install
./mkcert localhost
service mysql restart
service php7.3-fpm start
service nginx restart
tail -f /dev/null
