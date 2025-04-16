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
    <title><?= $tr['contact_me'] ?? 'Contact' ?></title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<!--HEADER-->
<header class="header" id="header">
    <?php include_once $templates_path . 'menu_nav.php'; ?>
</header>

<!-- MAIN -->
<main class="main">
    <?php include_once $pages_path . 'about.php'; ?>

    <!-- Projects Section -->
    <?php include_once $pages_path . 'projets.php'; ?>

    <!-- Contact Section -->
    <?php include_once $pages_path . 'contact.php'; ?>
</main>

<!-- FOOTER -->
<footer class="footer">
    <?php include_once $templates_path . 'footer.php'; ?>
</footer>

<!-- JS -->
<script src="assets/js/loadProjects.js" defer></script>
<script src="assets/js/contact.js" defer></script>
<script src="assets/js/search_project.js" defer></script>
<script src="assets/js/scrollreveal.min.js" defer></script>
<script src="assets/js/main.js" defer></script>

</body>
</html>
