<?php 
require_once 'php/Database.php';
$db = Database::getInstance()->getConnection();

$pages_path = "pages/";
$php_path = "php/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<!--HEADER-->
<header class="header" id="header">
    <?php include_once $pages_path . 'menu_nav.html'; ?>
</header>

<!-- MAIN -->
<main class="main">
    <!-- Projects Section -->
    <?php include_once $php_path . 'projets.php'; ?>
    <!-- Contact Section -->
    <?php include_once $pages_path . 'contact.html'; ?>
</main>

<!-- FOOTER -->
<footer class="footer">
    <?php include_once $pages_path . 'footer.html'; ?>
</footer>

<!-- Include the JavaScript file for loading projects -->
<script src="assets/js/loadProjects.js" defer></script>
<script src="assets/js/form.js" defer></script>
</body>
</html>