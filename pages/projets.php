<?php
require_once 'php/Database.php';
$db = Database::getInstance()->getConnection();

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<section class="projects section" id="projects">
    <h3 class="section__subtitle">
        <?= $tr['my'] ?? 'Mes' ?> <span><?= $tr['projects'] ?? 'projets' ?></span>
    </h3>

    <h2 class="section__title">
        <?= $tr['recent_projects'] ?? 'Projets Récents' ?>
    </h2>
    
    <!-- 🔍 Formulaire de recherche -->
    <form id="searchForm" class="search__form">
        <input type="text" id="search" placeholder="<?= $tr['search_placeholder'] ?? '🔍 Rechercher un projet...' ?>" class="search__input">
    </form>

    <div class="projects__container container grid" id="projectsContainer">
        <?php
        $stmt = $db->prepare("SELECT * FROM projects LIMIT 3");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<article class='projects__card'>";
            if (!empty($row['image'])) {
                echo "<img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "' class='projects__img'>";
            }
            echo "<div class='projects__modal'>";
            echo "<h2 class='projects__title'>" . htmlspecialchars($row['name']) . "</h2>";
            echo "<p id='description-" . htmlspecialchars($row['id']) . "' style='display: none;'></p>";
            echo "<a href='" . htmlspecialchars($row['show_more_link']) . "' class='projects__button'>Git <i class='ri-external-link-line'></i></a>";
            echo "</div>";
            echo "</article>";
        }
        ?>
    </div>

    <div class="projects__more-container">
        <button id="showMoreProjects" class="projects__more"><?= $tr['see_more_projects'] ?? 'Voir plus de projets' ?></button>
    </div>
</section>
