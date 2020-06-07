# ft_server
## L'objectif du projet est de mettre en place un serveur web en utilisant Docker sous Nginx fonctionnant avec Dedian Buster.
Le serveur doit être capable de faire tourner en même temps Wordpress, PhpMyAdmin et MySQL.
Le serveur doit pouvoir utiliser le protocole SSL. 

Lancement du projet:
Build image:
	docker build -t ft_server .
Lancement du container:
	docker run -ti -p 8080:80 ft_server

## Ressources
- [Docker](https://openclassrooms.com/fr/courses/2035766-optimisez-votre-deploiement-en-creant-des-conteneurs-avec-docker/6211458-lancez-votre-premier-conteneur-en-local)
- Nginx [I](https://kifarunix.com/install-nginx-on-debian-10-buster/) & [II](http://nginx.org/en/docs/http/request_processing.html)
- [Wordpress](https://kifarunix.com/install-wordpress-5-with-nginx-on-debian-10-buster/)
- [PhpMyAdmin](https://kifarunix.com/install-phpmyadmin-with-nginx-on-debian-10-buster/)
- [LEMP](https://kifarunix.com/install-lemp-stack-on-debian-10-buster/)
- [Certificat SSL](https://kifarunix.com/how-to-create-self-signed-ssl-certificate-with-mkcert-on-ubuntu-18-04/)


 ##### Cheat List:
- Set the user and group ownership of the FOD to the web server user: chown -R www-data:www-data FILE_OR_DIRECTORY

- Rentrer dans le container pour y faire des actions:
	- Pour cela, vous devez utiliser la commande docker exec -ti ID_RETOURNÉ_LORS_DU_DOCKER_RUN bash.
	- Dans cette commande, l'argument -ti permet d'avoir un shell bash pleinement opérationnel. 
	- Une fois que vous êtes dans votre conteneur, vous pouvez vous rendre, via la commande cd /usr/share/nginx/html, dans le répertoire où se trouve le fichier index.html, pour modifier son contenu et voir le résultat en direct.

- Laisser Docker faire le menage: docker system prune
