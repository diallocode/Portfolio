<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<div class="footer__container container">
    
    <div class="footer__content">
        <a href="index.php" class="footer__logo">
            Mamadou Tanou <span>Diallo</span>
        </a>
        <p class="footer__description">
            <?= $tr['footer_desc'] ?? "Étudiant en informatique passionné par le développement web et la cybersécurité." ?>
        </p>
    </div>

    <div class="footer__content">
        <h3 class="footer__title"><?= $tr['links'] ?? 'Liens' ?></h3>
        <ul class="footer__links">
            <li><a href="index.php#home" class="footer__link"><?= $tr['home'] ?? 'Accueil' ?></a></li>
            <li><a href="index.php#skills" class="footer__link"><?= $tr['skills'] ?? 'Compétences' ?></a></li>
            <li><a href="index.php#projects" class="footer__link"><?= $tr['projects'] ?? 'Projets' ?></a></li>
            <li><a href="more.php#contact" class="footer__link"><?= $tr['contact'] ?? 'Contact' ?></a></li>
        </ul>
    </div>

    <div class="footer__content">
        <h3 class="footer__title"><?= $tr['socials'] ?? 'Réseaux' ?></h3>
        <div class="footer__social">
            <a href="https://github.com/TonPseudoGitHub" target="_blank" class="footer__social-link" title="GitHub">
                <i class="ri-github-line"></i>
            </a>

            <a href="https://linkedin.com/in/TonProfil" target="_blank" class="footer__social-link" title="LinkedIn">
                <i class="ri-linkedin-box-line"></i>
            </a>

            <a href="mailto:tanoudialo04@gmail.com" class="footer__social-link" title="Email">
                <i class="ri-mail-line"></i>
            </a>
        </div>
    </div>
</div>

<div class="footer__copy-bar">
    <span class="footer__copy">
        &#169; <?= date('Y') ?> Mamadou Tanou Diallo. All rights reserved.
    </span>
</div>