<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<section class="about section" id="education">
    <h3 class="section__subtitle"><?= $tr['subtitle_03'] ?? '<span>03.</span> Bio' ?></h3>
    <h2 class="section__title"><?= $tr['title_03'] ?? 'Cursus Académique' ?></h2>

    <div class="about__container container">
        
        <div class="about__tabs">
            <div class="about__tab active-tab" data-target="#education-content">
                <i class="ri-graduation-cap-fill"></i> <?= $tr['educations'] ?>
            </div>
            <div class="about__tab" data-target="#certification-content">
                <i class="ri-medal-fill"></i> <?= $tr['certifications'] ?? 'Certifications' ?>
            </div>
            <div class="about__tab" data-target="#hobbies-content">
                <i class="ri-heart-fill"></i> <?= $tr['hobbies'] ?? 'Passions' ?>
            </div>
        </div>

        <div class="about__content active-content" id="education-content">
            <div class="timeline">
                <div class="timeline__item">
                    <span class="timeline__date">2025 - <?= $tr['present'] ?? 'Présent' ?></span>
                    <h3 class="timeline__title"><?= $tr['insa_title']  ?></h3>
                    <span class="timeline__subtitle">INSA Centre Val de Loire</span>
                    <p class="timeline__desc"><?= $tr['insa_desc'] ?></p>
                </div>
                <div class="timeline__item">
                    <span class="timeline__date">2023 - 2025</span>
                    <h3 class="timeline__title"><?= $tr['licence_info'] ?? 'Licence Informatique' ?></h3>
                    <span class="timeline__subtitle">Université de Strasbourg</span>
                    <p class="timeline__desc"><?= $tr['licence_info_desc'] ?? 'Bases de la programmation (C, Python, Java), Web (HTML/CSS), Programmation Fonctionnelle, Mathématiques discrètes...' ?></p>
                </div>
                <div class="timeline__item">
                    <span class="timeline__date">2022 - 2023</span>
                    <h3 class="timeline__title"><?= $tr['licence_math'] ?? 'Licence 1 Mathématiques' ?></h3>
                    <span class="timeline__subtitle">Université de Strasbourg</span>
                    <p class="timeline__desc"><?= $tr['licence_math_desc'] ?? 'Algèbre linéaire, Analyse, Logique mathématique, Géométrie...' ?></p>
                </div>
                <div class="timeline__item">
                    <span class="timeline__date">2021 - 2022</span>
                    <h3 class="timeline__title"><?= $tr['bac'] ?></h3>
                    <span class="timeline__subtitle">Lycée Mahatma Gandhi</span>
                    <p class="timeline__desc"><?= $tr['options'] ?></p>
                </div>
            </div>
        </div>

        <div class="about__content" id="certification-content">
            <div class="cert__grid">
                <div class="cert__card">
                    <div class="cert__icon"><i class="ri-shield-check-fill"></i></div>
                    <div class="cert__data">
                        <h3 class="cert__title">Ethical Hacking</h3>
                        <span class="cert__issuer">Udemy - 2025</span>
                    </div>
                </div>
                <div class="cert__card">
                    <div class="cert__icon"><i class="ri-router-fill"></i></div>
                    <div class="cert__data">
                        <h3 class="cert__title">IP Addressing</h3>
                        <span class="cert__issuer">Cybrary - 2024</span>
                    </div>
                </div>
                </div>
        </div>

        <div class="about__content" id="hobbies-content">
            <div class="hobbies__container">
                <span class="hobby__tag"><i class="ri-chess-fill"></i> <?= $tr['chess'] ?></span>
                <span class="hobby__tag"><i class="ri-book-read-fill"></i> <?= $tr['tech_watch'] ?></span>
                <span class="hobby__tag"><i class="ri-movie-2-fill"></i> <?= $tr['cinema'] ?? 'Cinéma' ?></span>
                <span class="hobby__tag"><i class="ri-terminal-window-fill"></i> Coding</span>
                <span class="hobby__tag"><i class="ri-plane-fill"></i> <?= $tr['travel'] ?? 'Voyage' ?></span>
            </div>
        </div>

    </div>
</section>

<script>
    // script JS pour gérer les onglets sans recharger la page
    const tabs = document.querySelectorAll('.about__tab');
    const contents = document.querySelectorAll('.about__content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = document.querySelector(tab.dataset.target);
            
            tabs.forEach(t => t.classList.remove('active-tab'));
            contents.forEach(c => c.classList.remove('active-content'));
            
            tab.classList.add('active-tab');
            target.classList.add('active-content');
        });
    });
</script>