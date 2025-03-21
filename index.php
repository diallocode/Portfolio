<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    header('Content-Type: text/html; charset=UTF-8');
    ?>

    <?php 
    require_once 'php/Database.php';
    $db = Database::getInstance()->getConnection();

    $pages_path = "pages/";
    $php_path = "php/"
    ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css"> <!-- Bibliotheque css pour nav__close et nav__tooggle -->
    <!-- import des fichier css -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>my_portfolio</title>
</head>

<body>
<!--HEADER-->
    <header class="header" id="header">
        <?php include_once $pages_path . 'menu_nav.html'; ?>
        <a href="php/login.php">Login-Page</a>
    </header>

<!-- MAIN -->
    <main class="main">
        <?php 
        include_once $pages_path . 'home.html'; 
        include_once $pages_path . 'about.html'; 
        include_once $pages_path . 'competences.html'; 
        include_once $pages_path . 'experiences.html'; 
        ?>
    </main>

<!-- FOOTER -->
    <footer class="footer">
        <?php include_once $pages_path . 'footer.html'; ?>
    </footer>

    <!-- Defilement vers le haut -->
     <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
     </a>

    <!-- EMAIL JS : a changer plus tard pour utiliser du php -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

    <!-- ScrollReveal JS -->
    <script src="assets/js/scrollreveal.min.js" defer></script>
  
    <!-- MAIN JS -->
    <script src="assets/js/main.js" defer></script>

</body>
</html>