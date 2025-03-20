<?php 
require_once 'php/Database.php';
$db = Database::getInstance()->getConnection();

$pages_path = "pages/";
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
    
    <section class="projects">
        <h2>Projects</h2>
        <div class="projects__container container grid">
            <?php
            $stmt = $db->query("SELECT * FROM projects");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<article class='projects__card'>";
                if (!empty($row['image'])) {
                    echo "<img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "' class='projects__img'>";
                }
                echo "<div class='projects__modal'>";
                echo "<span class='projects__subtitle'>" . htmlspecialchars($row['category']) . "</span>";
                echo "<h2 class='projects__title'>" . htmlspecialchars($row['name']) . "</h2>";
                echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                echo "<a href='#' class='projects__button'>Voir plus <i class='ri-external-link-line'></i></a>";
                echo "</div>";
                echo "</article>";
            }
            ?>
        </div>
    </section>

    <!-- Contact Section -->
    <?php include_once $pages_path . 'contact.html'; ?>
</main>

<!-- FOOTER -->
<footer class="footer">
    <?php include_once $pages_path . 'footer.html'; ?>
</footer>
</body>
</html>