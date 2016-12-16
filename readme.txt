L'installation des dépendances (répertoire vendor) se fait par une mise mise à jour via Composer avec la commande :
php composer.phar install

L'installation des dépendances lors de la réalisation du PoC avec cette commande a eu pour effet l'écriture par Composer de la liste des versions exactes installées dans le fichier composer.lock.
Ceci permet donc de verrouiller le projet sur ces versions spécifiques car la commande install utilise en priorité ce fichier par rapport au fichier composer.json.
On évite donc ainsi les écarts lors du portage du projet dans les environnements de recette ou de production.

S'il est cependant nécessaire de récupérer les dernières versions des dépendances, on utlise alors la commande :
php composer.phar update
