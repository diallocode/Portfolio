<?php 
session_start();
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/lang/' . $lang . '.php';

require_once 'php/Database.php';
$db = Database::getInstance()->getConnection();

$templates_path = "templates/";
$php_path = "php/";
$pages_path = "pages/";
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $tr['about_me'] ?? 'En savoir plus' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header class="header" id="header">
        <?php include_once $templates_path . 'menu_nav.php'; ?>
    </header>

    <main class="main">
        <?php 
        //  A propos
        include_once $pages_path . 'about.php'; 
        
        // Expériences 
        include_once $pages_path . 'experiences.php'; 

        // Contact
        include_once $pages_path . 'contact.php'; 
        ?>
    </main>

    <footer class="footer">
        <?php include_once $templates_path . 'footer.php'; ?>
    </footer>

    <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
    </a>

    <script src="assets/js/contact.js" defer></script>
    <script src="assets/js/scrollreveal.min.js" defer></script>
    <script src="assets/js/main.js" defer></script>

</body>
</html>