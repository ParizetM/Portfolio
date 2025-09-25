# Copilot Instructions for Portfolio Codebase

## Vue d'ensemble
Ce projet est un portfolio PHP personnalisé, structuré autour de fichiers PHP modulaires (ex : `home.php`, `projets.php`, `projet.php`, etc.) et d'un système de routage simple (`route.php`). Les assets (CSS, JS, images, polices) sont organisés dans le dossier `assets/`. Les projets individuels sont stockés dans le dossier `projets/` avec un sous-dossier par projet.

## Architecture & Flux

## Conventions spécifiques

## Points d'intégration

## Exemples de patterns
  ```php
  include 'header.php';
  ```
  ```php
  include 'get-projets.php';
  $projets = getProjets();
  ```
  - Créer un dossier dans `projets/`
  - Ajouter un `index.php` et un dossier `medias/`
  - Ajouter une entrée dans `projets.csv`

## Fichiers clés

Adaptez-vous à la structure modulaire, privilégiez la réutilisation des fragments et respectez l'organisation des assets et des données.

````instructions
# Copilot Instructions — Portfolio (Martin Parizet)

## But rapide
Ce dépôt est un site portfolio PHP simple, sans base de données. L'objectif pour un agent IA : modifier/ajouter des pages PHP, ajouter des projets statiques, corriger le rendu CSS/JS et maintenir la simplicité du routeur et du CSV.

## Architecture essentielle (lecture requise : `index.php`, `route.php`, `get-projets.php`)
- Entrée : `index.php` lit `?page=` (par défaut `home`) et inclut `route.php` qui mappe des clés (`home`, `projets`, `projet`) vers des fichiers `*.php` à la racine.
- Données projets : `projets.csv` contient les lignes de métadonnées; `get-projets.php` parse le CSV en tableau associatif (technos séparées par `&`).
- Pages : fichiers modulaires `home.php`, `projets.php`, `projet.php` incluent `header.php` / `footer.php` et utilisent `includes/tech-functions.php` pour helpers UI (ex : bulles technos).

## Conventions spécifiques au projet
- Ajout d'un projet : créer un dossier `projets/<id>/` avec un `index.php` et `medias/`, puis ajouter une ligne dans `projets.csv`.
- Nécessité d'utiliser `include`/`require` relatifs (pas d'autoloading). Exemple : `include 'header.php';`.
- CSV parsing : `get-projets.php` utilise `fgetcsv(..., ',', '"','\\')` et split sur `&` pour `technologies`.
- Assets : CSS compilé attendu dans `assets/css/outpouts.css` (Tailwind). Les sources Tailwind sont gérées via `package.json` dépendances (`tailwindcss`, `@tailwindcss/cli`).

## Commandes & debug (observées)
- Pas de scripts `npm` définis, mais Tailwind est présent dans `package.json` : installez dépendances puis générer CSS :
  - Installer : `npm install`
  - Générer Tailwind (exemple) : `npx tailwindcss -i ./src.css -o ./assets/css/outpouts.css --minify` (adapter chemins selon la structure locale)
- Serveur local : projet prévu pour être servi via PHP (ex : XAMPP, PHP built-in). Ex : `php -S localhost:8000` depuis la racine ou ouvrir via XAMPP.

## Patterns & exemples concrets à respecter
- Route simple : `route.php` mappe `$page` vers `page.php`. Ne pas renommer sans mettre à jour le routeur.
- Lecture CSV : voir `get-projets.php` — conserve l'ordre d'indices (0..7) et le séparateur `&` pour `technologies`.
- Helpers UI : `includes/tech-functions.php` expose `generateTechBubble()` et utilitaires (`getTechFiles`, `checkOverlap`). Réutilisez-les pour cohérence visuelle.

## Ce qu'un agent IA peut faire en toute sécurité
- Ajouter/éditer une entrée dans `projets.csv` et créer le dossier `projets/<id>/` avec `index.php` et `medias/`.
- Corriger des typos, améliorer accessibilité (alt sur images), ou optimiser chemins relatifs.
- Regénérer ou ajuster `assets/css/outpouts.css` via Tailwind.

## Limites et choses à ne pas faire automatiquement
- Ne pas convertir la logique en base de données sans accord — le projet est volontairement statique.
- Éviter d'exécuter ou modifier des scripts serveurs non présents (aucun API externe détecté).

## Fichiers clés à consulter avant tout changement
- `index.php`, `route.php`, `get-projets.php`, `projets.csv`, `includes/tech-functions.php`, `assets/css/outpouts.css`, `assets/js/`, `projets/`.

---
Adaptez-vous à la structure PHP procédurale et préférez des changements locaux, simples et réversibles. Après mise à jour, testez via un serveur PHP local (XAMPP ou `php -S`) et vérifiez l'affichage des pages `home`, `projets` et d'une page `projet` individuelle.

````
