<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<section class="services section" id="service">
    <h3 class="section__subtitle">
        <?= $tr['my'] ?? 'Mes' ?> <span><?= $tr['services'] ?? 'Services' ?></span>
    </h3>

    <h2 class="section__title">
        <?= $tr['my_experiences'] ?? 'Mes expériences' ?>
    </h2>

    <div class="services__container container grid">
        <article class="services__card">
            <i class="ri-layout-3-line services__icon"></i>

            <h2 class="services__title"><?= $tr['experience_1_title'] ?? 'Cours à domicile' ?></h2>

            <p class="services__description">
                <?= $tr['experience_1_desc'] ?? "Je donne des cours particuliers en mathématiques et en algorithmique à un lycéen en l'aidant à renforcer ses compétences." ?>
            </p>
        </article>

        <article class="services__card">
            <i class="ri-pantone-line services__icon"></i>

            <h2 class="services__title"><?= $tr['experience_2_title'] ?? "Employé d'hôtel - One Loft" ?></h2>

            <p class="services__description">
                <?= $tr['experience_2_desc'] ?? "Je préparais les lits pour les arrivées des clients, assurant un environnement propre et accueillant. Cette expérience m'a permis de développer un sens du détail et le travail en équipe." ?>
            </p>
        </article>

        <article class="services__card">
            <i class="ri-pen-nib-line services__icon"></i>

            <h2 class="services__title"><?= $tr['experience_3_title'] ?? 'Employé polyvalent - Vapiano' ?></h2>

            <p class="services__description">
                <?= $tr['experience_3_desc'] ?? "Je préparais les plats et assurais diverses tâches en cuisine. Cette expérience m'a permis de développer mon efficacité et ma capacité à travailler sous pression." ?>
            </p>
        </article>
    </div>
</section>
