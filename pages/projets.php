<!-- filepath: /home/barrydiallo/Bureau/prog_web/projet/my_portfolio/pages/projets.php -->
<?php
require_once 'php/Database.php';
$db = Database::getInstance()->getConnection();
?>

<section class="projects section" id="projects">
    <h3 class="section__subtitle">
        Mes <span>projets
    </h3>

    <h2 class="section__title">
        Projets Recent
    </h2>
    
    <!-- 🔍 Formulaire de recherche -->
    <form id="searchForm" class="search__form">
        <input type="text" id="search" placeholder="🔍 Rechercher un projet..." class="search__input">
        <select id="category" class="search__select">
            <option value="">Toutes catégories</option>
            <option value="langage c">Langage C</option>
            <option value="web">Web</option>
            <option value="python">Python</option>
            <option value="vmware">VMware</option>
        </select>
    </form>

    <div class="projects__container container grid" id = "projectsContainer">
    <?php
        $stmt = $db->query("SELECT * FROM projects LIMIT 3");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<article class='projects__card'>";
            if (!empty($row['image'])) {
                echo "<img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "' class='projects__img'>";
            }
            echo "<div class='projects__modal'>";
            echo "<span class='projects__subtitle'>" . htmlspecialchars($row['category']) . "</span>";
            echo "<h2 class='projects__title'>" . htmlspecialchars($row['name']) . "</h2>";
            echo "<p id='description-" . htmlspecialchars($row['id']) . "' style='display: none;'></p>";
            echo "<button class='projects__description' onclick='loadDescription(" . htmlspecialchars($row['id']) . ")'>Voir plus</button>";
            echo "<a href='" . htmlspecialchars($row['show_more_link']) . "' class='projects__button'>Git <i class='ri-external-link-line'></i></a>";
            echo "</div>";
            echo "</article>";
        }
        ?>
    </div>

    <div class="projects__more-container">
        <button id="showMoreProjects" class="projects__more">Voir plus de projets</button>
    </div>
</section>
