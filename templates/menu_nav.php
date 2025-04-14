<?php
session_start();
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="nav container">
    <a href="index.php" class="nav__logo">
       Mamadou Tanou <span>Diallo</span>
    </a>
    <!-- Bouton d'ouverture du menu -->
    <div class="nav__toggle" id="nav-toggle">
        <i class="ri-menu-line"></i>
    </div>
    <!-- Menu de navigation -->
    <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
            <li class="nav__item">
                <a href="index.php#home" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
                <a href="index.php#about" class="nav__link">About</a>
            </li>
            <li class="nav__item">
                <a href="index.php#skills" class="nav__link">Skills</a>
            </li>
            <li class="nav__item">
                <a href="index.php#service" class="nav__link">Service</a>
            </li>
            <li class="nav__item">
                <a href="contact.php#projets" class="nav__link">Projets</a>
            </li>
            <li class="nav__item">
                <a href="contact.php#contact" class="nav__link">Contact</a>
            </li>
            <?php if (isset($_SESSION['user_id'])): ?>
                <li class="nav__item">
                    <a href="admin/admin_page.php" class="nav__link <?php echo ($current_page == 'admin/admin_page.php') ? 'active' : ''; ?>">Se deconnecter</a>
                </li>
                <li class="nav__item">
                    <a href="admin/logout.php" class="nav__link">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav__item">
                    <a href="admin/login.php" class="nav__link <?php echo ($current_page == 'admin/login.php') ? 'active' : ''; ?>">Admin</a>
                </li>
            <?php endif; ?>
        </ul>

        <!-- Bouton permettant de supprimer le menu de navigation -->
        <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
        </div>
    </div>
</nav>