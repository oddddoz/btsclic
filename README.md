# BTS CLICK STARTER

Ce repository doit être forké et utilisé avant de commencer les missions 2.x.  

## Prérequis

Avoir installé Docker sur son ordi. [Ici](https://publish.obsidian.md/oddoz/Cours/0.3+Docker/1.+Docker+c'est+quoi%3F) un lien vers le cours pour installer et utiliser `docker`.

## Démarrer le projet

Pour démarrer le projet, c'est à dire le serveur web `PHP` et la base de donnée `MySQL`:

```bash
    docker compose up
```

Si vous modifiez le fichier init.sql. Il faut arrêter les containers et enlever leur `volumes` pour que les modifications soient prises en compte en redémarrant le container.

## Architecture du projet 

Le dossier `src` contient:
- les fichier php qui représentent les pages de notre site.
- un fichier `helper.php` qui contient des fonctions importées dans les autres fichiers php. 
- le `Dockerfile` contient les instruction pour construire le container PHP (on installe la librairie `mysqli` qui permet la connection à une base de données MySQL).