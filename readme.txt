L'installation des d�pendances (r�pertoire vendor) se fait par une mise mise � jour via Composer avec la commande :
php composer.phar install

L'installation des d�pendances lors de la r�alisation du PoC avec cette commande a eu pour effet l'�criture par Composer de la liste des versions exactes install�es dans le fichier composer.lock.
Ceci permet donc de verrouiller le projet sur ces versions sp�cifiques car la commande install utilise en priorit� ce fichier par rapport au fichier composer.json.
On �vite donc ainsi les �carts lors du portage du projet dans les environnements de recette ou de production.

S'il est cependant n�cessaire de r�cup�rer les derni�res versions des d�pendances, on utlise alors la commande :
php composer.phar update
