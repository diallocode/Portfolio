<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<section class="about section" id="education">
    <h3 class="section__subtitle"><span>03.</span> Bio</h3>
    <h2 class="section__title"><?= $tr['education'] ?? 'Formations & Certifications' ?></h2>

    <div class="about__container container">
        
        <div class="about__tabs">
            <div class="about__tab active-tab" data-target="#education-content">
                <i class="ri-graduation-cap-fill"></i> <?= $tr['educations'] ?? 'Études' ?>
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
                    <span class="timeline__date">2024 - 2025</span>
                    <h3 class="timeline__title">Licence 2 Informatique</h3>
                    <span class="timeline__subtitle">Université de Strasbourg</span>
                    <p class="timeline__desc">Algorithmique avancée, Structures de données, Architecture réseau.</p>
                </div>
                <div class="timeline__item">
                    <span class="timeline__date">2023 - 2024</span>
                    <h3 class="timeline__title">Licence 1 Informatique</h3>
                    <span class="timeline__subtitle">Université de Strasbourg</span>
                    <p class="timeline__desc">Bases de la programmation (C, Python), Web (HTML/CSS), Mathématiques discrètes.</p>
                </div>
                <div class="timeline__item">
                    <span class="timeline__date">2022 - 2023</span>
                    <h3 class="timeline__title">Licence 1 Mathématiques</h3>
                    <span class="timeline__subtitle">Université de Strasbourg</span>
                    <p class="timeline__desc">Algèbre linéaire, Analyse, Logique mathématique.</p>
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
                <div class="cert__card">
                    <div class="cert__icon"><i class="ri-award-fill"></i></div>
                    <div class="cert__data">
                        <h3 class="cert__title">Certification Pix</h3>
                        <span class="cert__issuer">Compétences Numériques - 2023</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="about__content" id="hobbies-content">
            <div class="hobbies__container">
                <span class="hobby__tag"><i class="ri-chess-fill"></i> Échecs</span>
                <span class="hobby__tag"><i class="ri-book-read-fill"></i> Veille Tech</span>
                <span class="hobby__tag"><i class="ri-movie-2-fill"></i> Cinéma</span>
                <span class="hobby__tag"><i class="ri-terminal-window-fill"></i> Coding</span>
                <span class="hobby__tag"><i class="ri-plane-fill"></i> Voyage</span>
            </div>
        </div>

    </div>
</section>

<script>
    // Petit script JS pour gérer les onglets sans recharger la page
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