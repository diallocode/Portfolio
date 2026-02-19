<?php
require_once 'php/Database.php';
$db = Database::getInstance()->getConnection();

if (session_status() === PHP_SESSION_NONE) { session_start(); }
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<section class="projects section" id="projects">
    <h3 class="section__subtitle"><?= $tr['subtitle_02'] ?? '<span>02.</span> Portfolio' ?></h3>
    <h2 class="section__title"><?= $tr['title_02'] ?? 'Réalisations' ?></h2>
    
    <div class="projects__container container" id="projectsContainer">
        <?php
        $stmt = $db->prepare("SELECT * FROM projects LIMIT 3");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<article class='projects__card'>";
            
            //  L'IMAGE EN HAUT
            echo "<div class='projects__image-box'>";
            if (!empty($row['image'])) {
                echo "<img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "' class='projects__img'>";
            }
            echo "</div>";
            
            // LE CONTENU EN BAS
            echo "<div class='projects__content'>";
                
                // --- SYSTÈME DE TRADUCTION ---
                
                // Pour le TITRE
                $dbName = $row['name'];
                $titleToShow = $tr[$dbName] ?? $dbName; // Si $tr['proj_shell_title'] existe, on l'utilise. Sinon on garde le texte de la BDD.
                echo "<h3 class='projects__title'>" . htmlspecialchars($titleToShow) . "</h3>";
                
                // Pour la DESCRIPTION
                $dbDesc = $row['description'];
                $descToShow = $tr[$dbDesc] ?? $dbDesc;
                echo "<p class='projects__description'>" . htmlspecialchars($descToShow) . "</p>";
                
                // --- FIN DU SYSTÈME ---

                // Bouton Git 
                echo "<a href='" . htmlspecialchars($row['show_more_link']) . "' target='_blank' class='projects__button'>";
                echo ($tr['source_code'] ?? 'Code Source') . " <i class='ri-github-line'></i>";
                echo "</a>";
            echo "</div>";
            
            echo "</article>";
        }
        ?>
    </div>

    <div class="projects__more-container">
        <button id="showMoreProjects" class="projects__more button"><?= $tr['see_more_projects'] ?? 'Voir plus de projets' ?></button>
    </div>
</section>