<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<section class="experience section" id="service">
    <h3 class="section__subtitle"><?= $tr['subtitle_04'] ?? '<span>04.</span> Carrière' ?></h3>
    <h2 class="section__title"><?= $tr['title_04'] ?? 'Experiences' ?></h2>

    <div class="experience__container container">
        <div class="experience__content">
            
            <div class="experience__data">
                <div></div> <div class="experience__line">
                    <span class="experience__rounder"></span>
                    <span class="experience__line-bar"></span>
                </div>
                
                <div class="experience__card">
                    <h3 class="experience__title"><?= $tr['experience_1_title'] ?? 'Enseignant Académique (Freelance)' ?></h3>
                    <span class="experience__subtitle"><?= $tr['experience_1_subtitle'] ?? 'Mathématiques & Algorithmique' ?></span>
                    <span class="experience__calendar">
                        <i class="ri-calendar-line"></i> 2024 - <?= $tr['present'] ?? 'Présent' ?>
                    </span>
                    <p class="experience__description"><?= $tr['experience_1_desc'] ?? "Pédagogie, vulgarisation de concepts complexes et accompagnement d'étudiants." ?></p>
                </div>
            </div>

            <div class="experience__data">
                <div class="experience__card right-align">
                    <h3 class="experience__title"><?= $tr['experience_2_title'] ?? 'Employé Polyvalent' ?></h3>
                    <span class="experience__subtitle"><?= $tr['experience_2_subtitle'] ?? 'Restauration & Hôtellerie (Vapiano / One Loft)' ?></span>
                    <span class="experience__calendar">
                        <i class="ri-calendar-line"></i> 2024 - 2025
                    </span>
                    <p class="experience__description"><?= $tr['experience_2_desc'] ?? "Travail en équipe, gestion du stress et adaptabilité dans des environnements exigeants." ?></p>
                </div>
                
                <div class="experience__line">
                    <span class="experience__rounder"></span>
                </div>
                
                <div></div> </div>

        </div>
    </div>
</section>