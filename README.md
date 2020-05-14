# testblablacar


# SYMFONY
​
## COMPOSER
​
- aller sur getcomposer.org, lien "download" sur la page d'accueil
- Windows : télécharger l'exécutable et le lancer
- Mac : ouvrir un terminal et suivre les instructions
- à ne pas réinstaller pour chaque nouveau projet Symfony
​
## NOUVEAU PROJET SYMFONY (4.4)
​
- se rendre dans le dossier www via le terminal :
```
windows: cd chemin_vers_www
mac: cd chemin_vers_htdocs : cd /Applications/MAMP/htdocs
```
- créer le projet :
```
windows: composer create-project symfony/website-skeleton nom_du_projet ^4.4.*
''''
mac: composer create-project symfony/website-skeleton:^4.4 my_project_name
```
​
## GIT
​
- créer un dépôt distant sur GitHub
- dans un nouveau terminal, aller dans le dossier Immobilier :
```
cd /Applications/MAMP/htdocs/immobilier
```
- initialiser Git :
```
git init
```
- relier le dépôt distant :
```
git remote add origin https://github.com/anaiscrenier/testblablacar.git
'''

- ajouter des fichiers dans ton dossier (qui apparaitra sur github):
```
git add *
```
```
git commit -m "..."
```
```
git push origin master
```

## APACHE-PACK

- barre de débug / routing :
```
composer require symfony/apache-pack
```

## CONTROLLER 


## BASE DE DONNÉES
​
- ligne 32 dans .env (y modifier avec les informations de connexion phpMyAdmin) :
```
DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7 
- exemple: DATABASE_URL=mysql://root:root@127.0.0.1:8889/nom du projet?serverVersion=5.7
```
