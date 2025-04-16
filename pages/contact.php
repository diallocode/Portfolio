<?php
session_start();
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<section class="contact section" id="contact">
    <link rel="stylesheet" href="../assets/css/styles.css">
    
    <h3 class="section__subtitle">
        <?= $tr['get_in'] ?? '' ?> <span><?= $tr['touch'] ?? '' ?></span>
    </h3>

    <h2 class="section__title">
        <?= $tr['contact_me'] ?? 'Contactez Moi' ?>
    </h2>

    <div class="contact__container container grid">

        <!-- 📌 Infos de Contact -->
        <div class="contact__info">
            <div class="contact__item">
                <i class="ri-mail-line"></i>
                <div>
                    <h3><?= $tr['email'] ?? 'Email' ?></h3>
                    <p>tanoudialo04@gmail.com</p>
                </div>
            </div>

            <div class="contact__item">
                <i class="ri-map-pin-line"></i>
                <div>
                    <h3><?= $tr['location'] ?? 'Localisation' ?></h3>
                    <p>Strasbourg, France</p>
                </div>
            </div>

            <div class="contact__item">
                <i class="ri-phone-line"></i>
                <div>
                    <h3><?= $tr['phone'] ?? 'Téléphone' ?></h3>
                    <p>+33 6 12 34 56 78</p>
                </div>
            </div>
        </div>

        <form action="php/contact_form.php" method="POST" class="contact__form" id="contact-form">
            <div class="contact__group">
                <input type="text" name="Nom" required placeholder="<?= $tr['enter_name'] ?? 'Entrez votre nom' ?>" class="contact__input">
                <input type="email" name="Email" required placeholder="<?= $tr['enter_email'] ?? 'Entrez votre email' ?>" class="contact__input">
            </div>

            <textarea name="besoin" required placeholder="<?= $tr['enter_message'] ?? 'Entrez votre message' ?>" class="contact__input"></textarea>

            <p class="contact__message" id="contact-message"></p>

            <button type="submit" class="button contact__button">
                <?= $tr['send'] ?? 'Envoyer' ?>
            </button>
        </form>
    </div>
</section>
