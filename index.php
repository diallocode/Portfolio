<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css"> <!-- Bibliotheque css pour nav__close et nav__tooggle -->
    <!-- import des fichier css -->
    <link rel="stylesheet" href="assets/css/a_propos.css">
    <link rel="stylesheet" href="assets/css/commun.css">
    <link rel="stylesheet" href="assets/css/competences.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/experiences.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/nav_bar.css">
    <link rel="stylesheet" href="assets/css/projets.css">

    <title>my_portfolio</title>
</head>

<body>
<!--HEADER-->
    <header class="header" id="header">
        
        <?php include 'pages/menu_nav.html'; ?>

    </header>
<!-- MAIN -->
    <main class="main">
        <!-- Home -->
        <?php include 'pages/home.html'; ?>

        <!-- About -->
        <?php include 'pages/about.html'; ?>

        <!-- Competences -->
        <?php include 'pages/competences.html'; ?>

        <!-- Service -->  <!--Je peux remplacer cette section par experiences-->
        <?php include 'pages/experiences.html'; ?>

        <!-- Projets -->
        <?php include 'pages/projets.html'; ?>

        <!-- Contact -->
        <?php include 'pages/contact.html'; ?>

    </main>

<!-- FOOTER -->
    <footer class="footer">
    <?php include 'pages/footer.html'; ?>
    </footer>

    <!-- Defilement vers le haut -->
     <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
     </a>

    <!-- EMAIL JS : a changer plus tard pour utiliser du php -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

    <!-- ScrollReveal JS -->
    <script src="assets/js/scrollreveal.min.js"></script>
  
    <!-- MAIN JS -->
    <script src="assets/js/main.js" ></script>

</body>
</html>