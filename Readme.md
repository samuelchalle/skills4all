# Procédure d’installation de l’application
- Créer un fichier .env.local à la racine du projet
- Copier le contenu du fichier .env dans le fichier .env.local
- Modifier la ligne DATABASE_URL en fonction de votre configuration
- Exécuter les commandes suivantes :
```bash
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate -n
php bin/console doctrine:fixtures:load -n
composer install
yarn install
yarn encore dev --watch
```