<?php
session_start();
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/lang/' . $lang . '.php';

require_once 'php/Database.php';
$db = Database::getInstance()->getConnection();

$pages_path = "pages/";
$templates_path = "templates/";
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>my_portfolio</title>
</head>

<body>
<!--HEADER-->
    <header class="header" id="header">
        <?php include_once $templates_path . 'menu_nav.php'; ?>
    </header>

<!-- MAIN -->
    <main class="main">
        <?php 
        include_once $pages_path . 'home.php'; 
        include_once $pages_path . 'experiences.php'; 
        include_once $pages_path . 'competences.php'; 
        ?>
    </main>

<!-- FOOTER -->
    <footer class="footer">
        <?php include_once $templates_path . 'footer.php'; ?>
    </footer>

    <!-- Scroll to top -->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <script src="assets/js/scrollreveal.min.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</body>
</html>
