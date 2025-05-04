# 🌐 Portfolio - Mamadou Tanou Diallo

Bienvenue sur mon portfolio personnel, développé dans le cadre d’un projet universitaire. Ce site met en avant mes compétences en développement web, et gestion de projet, tout en respectant les bonnes pratiques de sécurité et d’accessibilité.

---

## 📁 Structure du projet

Le projet est organisé comme suit :

my_portfolio/ 
              ├── assets/ # Fichiers CSS, JS, images 
              ├── lang/ # Fichiers de traduction (FR, EN) 
              ├── pages/ # Pages principales du site (home, compétences, projets, etc.) 
              ├── templates/ # Templates réutilisables (header, footer, menu) 
              ├── php/ # Scripts PHP (connexion à la base de données, traitement des formulaires) 
              ├── Public/ # Fichiers publics (CV, autres ressources) 
└── index.php # Point d'entrée principal

---

## 🚀 Lancer le projet

1. Clonez le dépôt :
   ```bash
   git clone https://github.com/votre-utilisateur/nom-du-repo.git

2. Accédez au dossier du projet :
    cd my_portfolio

3. Configurez la base de données :
Importez le fichier SQL fourni dans votre serveur MySQL.
Mettez à jour les informations de connexion dans php/Database.php.

4. Lancez un serveur PHP local :
    php -S localhost:8000

5. Ouvrez votre navigateur et accédez à :
    http://localhost:8000


## 🧩 Fonctionnalités

- 🔐 Connexion administrateur sécurisée
- 📚 Gestion de projets (Ajout, Suppression)
- 🗂️ Chargement AJAX des projets avec pagination
- 🔍 Barre de recherche dynamique via `fetch()`
- 📬 Formulaire de contact (POST) avec validation JS + PHP
- 🏳️‍🌍 Système de **traduction dynamique** (FR / EN)
- 📱 Responsive design avec menu mobile
- ♿ Accessibilité : `alt`, `label`, `aria`, textes clairs
- 🧼 Code sécurisé : protection **XSS** et **SQL injection** via PDO préparé

---

## ✅ Technologies utilisées

- HTML5 / CSS3 / JavaScript (ES6)
- PHP 8 avec PDO
- SQL (MySQl)
- Aucun framework externe
- Aucune bibliothèque JS tierce (hors Remixicon et ScrollReveal)

---

## 👨‍💻 Auteur

- **Nom :** Mamadou Tanou Diallo
- **Projet réalisé dans le cadre universitaire**
- Année : 2024-2025

---

## 📝 Licence

Ce projet est à usage pédagogique. Toute réutilisation à des fins professionnelles ou commerciales nécessite une autorisation.


php -S localhost:8000

