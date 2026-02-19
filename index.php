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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Mamadou Tanou Diallo</title>
    
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22></text></svg>">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <header class="header" id="header">
        <?php include_once $templates_path . 'menu_nav.php'; ?>
    </header>

    <main class="main">
        <?php 
        // Accueil
        include_once $pages_path . 'home.php'; 

        // Projets 
        include_once $pages_path . 'projets.php'; 
        
        // Compétences 
        include_once $pages_path . 'competences.php'; 
        ?>
    </main>

    <footer class="footer">
        <?php include_once $templates_path . 'footer.php'; ?>
    </footer>

    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <script src="assets/js/loadProjects.js" defer></script>
    <script src="assets/js/scrollreveal.min.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</body>
</html>