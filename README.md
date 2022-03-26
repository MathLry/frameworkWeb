# YNOV NANTES - B2 - 2122

## exemple
- Catégories : CRUD - Create, Read, Update, Delete

-> 1 table en BDD - ```php artisan make:migration create_categories_table```
-> 1 modèle pour gérer les catégories en BDD
-> 1 contrôleur spécifique pour les catégories
-> les vues nécessaires
-> les routes nécessaires

## Projet

### Énoncé

Vous allez devoir faire un site web permettant de gérer des cocktails : 

---
#### TEMPS 1
- Gérer une liste de sirops
    - nom
- Gérer une liste de softs (= sans alcool)
    - nom
- Gérer une liste des types d'alcools (ex: rhum, whiskey, vodka, etc...)
    - nom
- Gérer une liste de fruits
    - nom
    - image
- Gérer une liste de verres (= types de verres)
    - nom
    - image

---
#### TEMPS 2
- Gérer une liste d'alcools (ex: greygoose, smirnoff...)
    - nom
    - degré
    - type d'alcool (relation vers la table "types d'alcools")

---
#### TEMPS 3
- gérer une liste de cocktails, qui seront in fine, une composition de tous les éléments cités ci-dessus

---
#### ATTENTION 
Les temps 1, 2 et 3 sont à gérer en mode "backoffice", c'est-à-dire, ajoutable a partir d'une genre de panel "admin"

---
#### TEMPS 4
- Mettre en place l'authentification (login/register) pour ne laisser l'accès qu'aux membres identifiés pour le panel admin

---
#### TEMPS 5
- Présentation propre de tous les cocktails en front (partie visible sans connexion)

---
#### Commandes à éxécuter
- Doc technique: https://laravel.com/docs/9.x/
- Lancer le serveur: `php artisan serve`
- Si il y a un problème de dépendences dans le projet:</br>
    1- `composer du --ignore-platform-req=ext-fileinfo`</br>
    2- `composer install --ignore-platform-req=ext-fileinfo`
- Créer une migration: </br>
    1- `php artisan make:migration nom_du_fichier`</br>
    2- `php artisan migrate`</br>
    3- Si nécessaire: `php artisan migrate:refresh` ou `php artisan migrate:status`
- Créer un contrôleur: `php artisan make:controller nom_du_fichier`
- Créer un modèle: `php artisan make:model nom_du_fichier`

---
#### Tâches à faire
- Catégories : CRUD - Create, Read, Update, Delete
    - 1 table en BDD
    - 1 modèle pour gérer les catégories en BDD
    - 1 contrôleur spécifique pour les catégories
    - les vues nécessaires
    - les routes nécessaires

---
### Groupe
- YASSER Youssouf mohamed - LEROY Mathias - Enzo Pinot

---
<p align="center">
    <strong> YNOV NANTES - B2 - 2122</strong>
</p>
