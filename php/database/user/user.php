<!-- filepath: /home/barrydiallo/Bureau/prog_web/projet/my_portfolio/pages/add_user.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <section class="add-user section" id="add-user">
        <div class="add-user__container container grid">
            <form action="add_user.php" method="POST" class="add-user__form" id="add-user-form">
                <h2>Ajouter un utilisateur</h2>
                <div class="add-user__group">
                    <input type="text" name="username" required placeholder="Entrez le nom d'utilisateur" class="add-user__input">
                    <input type="password" name="password" required placeholder="Entrez le mot de passe" class="add-user__input">
                </div>
                <p class="add-user__message" id="add-user-message"></p>
                <button type="submit" class="button add-user__button">Ajouter</button>
            </form>
        </div>
    </section>

    <!-- Include the JavaScript file for handling the add user form -->
    <script src="../assets/js/add_user.js" defer></script>
</body>
</html>

<!-- Ce formulaire permet l'ajout d'un utilisateur dans ma bdd -->