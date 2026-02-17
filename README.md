# 🌐 Portfolio - Mamadou Tanou Diallo

Bienvenue sur mon portfolio personnel, développé dans le cadre d’un projet universitaire. Ce site met en avant mes compétences en développement web et gestion de projet, tout en respectant les bonnes pratiques de sécurité et d’accessibilité.

---

## 📁 Structure du projet

Le projet est organisé comme suit :

```plaintext
my_portfolio/
├── assets/        # Fichiers CSS, JS, images
├── lang/          # Fichiers de traduction (FR, EN)
├── pages/         # Pages principales (home, compétences, projets, etc.)
├── templates/     # Templates réutilisables (header, footer, menu)
├── php/           # Scripts PHP (connexion BDD, traitements)
├── Public/        # Ressources publiques (CV, documents)
├── Admin/         # contient les fichiers de la page d'administration pour ajouter et supprimer des projets
└── more.php       # Point d'entrée principal
└── index.php      # Point d’entrée principal
```

## Lien Web
 https://portfolio-production-ecbc.up.railway.app/


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

## Mot de passe pour le menu admin 
    username : tanou
    password : diallo


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

## 📧 Contact

- **Email** : tanoudialo04@gmail.com
- **LinkedIn** : https://www.linkedin.com/in/mamadou-tanou-diallo-56470b285/


## 📝 Licence

Ce projet est à usage pédagogique. Toute réutilisation à des fins professionnelles ou commerciales nécessite une autorisation.



