<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$current_page = htmlspecialchars(basename($_SERVER['PHP_SELF']));

// Charger la langue
$lang = $_SESSION['lang'] ?? 'en'; 
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<nav class="nav container">
    <a href="index.php" class="nav__logo">
        Mamadou Tanou <span>Diallo</span>
    </a>

    <div class="nav__toggle" id="nav-toggle">
        <i class="ri-menu-line"></i>
    </div>

    <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
            
            <li class="nav__item">
                <a href="index.php#home" class="nav__link"><?= $tr['home'] ?? 'Accueil' ?></a>
            </li>
            <li class="nav__item">
                <a href="index.php#skills" class="nav__link"><?= $tr['skills'] ?? 'Compétences' ?></a>
            </li>
            <li class="nav__item">
                <a href="index.php#projects" class="nav__link"><?= $tr['projects'] ?? 'Projets' ?></a>
            </li>

            <li class="nav__item">
                <a href="more.php#education" class="nav__link"><?= $tr['education'] ?? 'Formation' ?></a>
            </li>
            <li class="nav__item">
                <a href="more.php#service" class="nav__link"><?= $tr['experiences'] ?? 'Expériences' ?></a>
            </li>
            <li class="nav__item">
                <a href="more.php#contact" class="nav__link"><?= $tr['contact'] ?? 'Contact' ?></a>
            </li>

            <?php if (isset($_SESSION['user_id'])): ?>
                <li class="nav__item">
                    <a href="admin/admin_page.php" class="nav__link <?= $current_page == 'admin_page.php' ? 'active-link' : '' ?>">
                        Dashboard
                    </a>
                </li>
                <li class="nav__item">
                    <a href="admin/logout.php" class="nav__link">Déconnexion</a>
                </li>
            <?php else: ?>
                <?php endif; ?>

            <li class="nav__item nav__lang" style="display: flex; gap: 0.5rem;">
                <a href="php/set_lang.php?lang=fr" title="Français" style="opacity: <?= $lang == 'fr' ? '1' : '0.5' ?>;">
                    🇫🇷
                </a>
                <a href="php/set_lang.php?lang=en" title="English" style="opacity: <?= $lang == 'en' ? '1' : '0.5' ?>;">
                    🇬🇧
                </a>
            </li>
        </ul>

        <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
        </div>
    </div>
</nav>