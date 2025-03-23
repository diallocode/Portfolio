<!-- filepath: /home/barrydiallo/Bureau/prog_web/projet/my_portfolio/pages/login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../php/assets/css/styles.css">
</head>
<body>
    <section class="login section" id="login">
        <div class="login__container container grid">
            <form action="connexion.php" method="POST" class="login__form" id="login-form">
                <h2>Login</h2>
                <div class="login__group">
                    <input type="text" name="username" required placeholder="Entrez votre nom d'utilisateur" class="login__input">
                    <input type="password" name="password" required placeholder="Entrez votre mot de passe" class="login__input">
                </div>
                <p class="login__message" id="login-message"></p>
                <button type="submit" class="button login__button">Se connecter</button>
            </form>
        </div>
    </section>

     <!-- Include the JavaScript file for handling the login form -->
     <script src="ajax.js" defer></script>

</body>
</html>


<!-- Formulaire de login pour acceder aux contact recu -->