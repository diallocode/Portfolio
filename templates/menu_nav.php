<?php
session_start();
$current_page = htmlspecialchars(basename($_SERVER['PHP_SELF']));

// Charger la langue
$lang = $_SESSION['lang'] ?? 'fr';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<nav class="nav container">
    <a href="index.php" class="nav__logo">
        Mamadou Tanou <span>Diallo</span>
    </a>

    <!-- Bouton d'ouverture du menu (burger) -->
    <div class="nav__toggle" id="nav-toggle">
        <i class="ri-menu-line"></i>
    </div>

    <!-- Menu de navigation -->
    <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
            <li class="nav__item"><a href="index.php#home" class="nav__link"><?= $tr['home'] ?></a></li>
            <li class="nav__item"><a href="index.php#about" class="nav__link"><?= $tr['about'] ?></a></li>
            <li class="nav__item"><a href="index.php#skills" class="nav__link"><?= $tr['skills'] ?></a></li>
            <li class="nav__item"><a href="index.php#service" class="nav__link"><?= $tr['service'] ?? 'Service' ?></a></li>
            <li class="nav__item"><a href="contact.php#projets" class="nav__link"><?= $tr['projects'] ?></a></li>
            <li class="nav__item"><a href="contact.php#contact" class="nav__link"><?= $tr['contact'] ?></a></li>

            <?php if (isset($_SESSION['user_id'])): ?>
                <li class="nav__item">
                    <a href="admin/admin_page.php" class="nav__link <?= $current_page == 'admin_page.php' ? 'active' : '' ?>">
                        <?= $tr['dashboard'] ?? 'Dashboard' ?>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="admin/logout.php" class="nav__link"><?= $tr['logout'] ?></a>
                </li>
            <?php else: ?>
                <li class="nav__item">
                    <a href="admin/login.php" class="nav__link <?= $current_page == 'login.php' ? 'active' : '' ?>">
                        <?= $tr['admin'] ?>
                    </a>
                </li>
            <?php endif; ?>

            <!-- Sélecteur de langue avec drapeaux -->
            <li class="nav__item nav__lang">
                <a href="php/set_lang.php?lang=fr" class="nav__link" title="Français">
                    🇫🇷
                </a>
                <a href="php/set_lang.php?lang=en" class="nav__link" title="English">
                    🇬🇧
                </a>
            </li>
        </ul>

        <!-- Fermeture du menu mobile -->
        <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
        </div>
    </div>
</nav>
