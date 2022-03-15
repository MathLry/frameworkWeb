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

#### Temps 1
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

#### Temps 2
- Gérer une liste d'alcools (ex: greygoose, smirnoff...)
    - nom
    - degré
    - type d'alcool (relation vers la table "types d'alcools")

#### Temps 3
- gérer une liste de cocktails, qui seront in fine, une composition de tous les éléments cités ci-dessus

#### ATTENTION 
Les temps 1, 2 et 3 sont à gérer en mode "backoffice", c'est-à-dire, ajoutable a partir d'une genre de panel "admin"

#### Temps 4
- Mettre en place l'authentification (login/register) pour ne laisser l'accès qu'aux membres identifiés pour le panel admin

#### Temps 5
- présentation propre de tous les cocktails en front (partie visible sans connexion)

### Groupes
- YASSER Youssouf mohamed - LEROY Mathias - Enzo Pinot
