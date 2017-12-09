
## MeufCode

### Initialisation du projet :
Un dépôt cloné ne contient que les sources, et n'est pas rattaché à une BDD.

* Pré-requis : Php, PhpMyAdmin ou autre, Laravel

#### Étapes de l'init:
* cloner le projet
* entrer dans le dossier du projet
* $ composer install
 pour générer le dossier vendor contenant les dépendances: modules, librarie, paramètres
* $ cp .env.example .env 
 création du fichier .env
* si erreur :  (PHP Warning include_path='.:/usr/share/php')
 $ composer update
* $ php artisan key:generate
 génération de la clé de l'appli 
* modifier le fichier .env pour la connection à la BDD
* $ php artisan migrate
 lancement des migrations
 optionel : php artisan migrate --seed

#### Lancement de l'application Laravel :
* $ php artisan serve

* Pour spécifier le port pour son projet:
 $ php artisan serve --port=8080
 On peut nommer nos serveurs entre 3000 et 9999 comme on veut.


## Tutorial & Notes

[Maquette](https://www.figma.com/proto/HNjKBCEpKqvyGnP1pbZOwCCN/MissCode?scaling=contain&node-id=1%3A3)

[Slide](https://slides.com/pixelspy/deck-17/)


