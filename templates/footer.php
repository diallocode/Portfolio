<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Définir la langue par défaut
$lang = $_SESSION['lang'] ?? 'en'; // Langue par défaut : anglais

// Charger les traductions
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<div class="footer__container container grid">
    <div>
        <h1 class="footer__title">
            Mamadou Tanou <span>Diallo</span>
        </h1>

        <h2 class="footer__education">
            <?= $tr['student_in_computer_science'] ?>
        </h2>
    </div>

    <div class="footer__social">
        <a href="https://www.facebook.com" target="_blank" class="footer__social-link">
            <i class="ri-facebook-line"></i>
        </a>

        <a href="https://www.instagram.com" target="_blank" class="footer__social-link">
            <i class="ri-instagram-line"></i>
        </a>
    </div>

    <span class="footer__copy">
        &#169; <?= $tr['copyright'] ?>
    </span>
</div>