<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<section class="experience section" id="service">
    <h3 class="section__subtitle"><span>04.</span> Carrière</h3>
    <h2 class="section__title"><?= $tr['my_experiences'] ?? 'Expériences' ?></h2>

    <div class="experience__container container">
        <div class="experience__content">
            
            <div class="experience__data">
                <div></div> <div class="experience__line">
                    <span class="experience__rounder"></span>
                    <span class="experience__line-bar"></span>
                </div>
                <div class="experience__card">
                    <h3 class="experience__title"><?= $tr['experience_1_title'] ?? 'Professeur Particulier' ?></h3>
                    <span class="experience__subtitle">Freelance - Maths & Algo</span>
                    <span class="experience__calendar"><i class="ri-calendar-line"></i> 2023 - Present</span>
                    <p class="experience__description">Pédagogie, vulgarisation de concepts complexes et accompagnement d'étudiants.</p>
                </div>
            </div>

            <div class="experience__data">
                <div class="experience__card right-align"> <h3 class="experience__title"><?= $tr['experience_2_title'] ?? 'Employé Polyvalent' ?></h3>
                    <span class="experience__subtitle">One Loft / Vapiano</span>
                    <span class="experience__calendar"><i class="ri-calendar-line"></i> 2022 - 2023</span>
                    <p class="experience__description">Travail en équipe et adaptabilité en environnement rapide.</p>
                </div>
                <div class="experience__line">
                    <span class="experience__rounder"></span>
                    </div>
                <div></div>
            </div>

        </div>
    </div>
</section>