<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<section class="home section" id="home">
    <div class="home__container container grid">
        <div class="home__content">
            <div class="home__data">
                <span class="home__greeting"><?= $tr['hello'] ?? 'Hello,' ?></span>
                <h1 class="home__title">Mamadou Tanou <span>Diallo</span></h1>
                <h3 class="home__education"><?= $tr['student_info'] ?? 'Développeur Fullstack & Cyber' ?></h3>
                
                <p class="home__description">
                    <?= $tr['home_description'] ?? "Je transforme des problèmes complexes en code simple, sécurisé et performant. Basé en France." ?>
                </p>

                <div class="home__buttons">
                    <a href="/Public/Mamadou_Tanou_DIALLO_CV-1.pdf" target="_blank" class="button button--ghost">
                        <?= $tr['download_cv'] ?? 'Mon CV' ?> <i class="ri-download-line"></i>
                    </a>
                    <a href="#projects" class="button">
                        <?= $tr['view_projects'] ?? 'Voir mes projets' ?> <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </div>

      <div class="home__image">
          <div class="home__image-wrapper">
            <img src="assets/images/tanou.png" alt="Mamadou Tanou Diallo">
         </div>
      </div>
    </div>
</section>