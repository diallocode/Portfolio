<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<section class="contact section" id="contact">
    <h3 class="section__subtitle"><span>05.</span> Connexion</h3>
    <h2 class="section__title"><?= $tr['contact_me'] ?? 'Écrivez-moi' ?></h2>

    <div class="contact__container container grid">
        <div class="contact__content">
            <h3 class="contact__title"></h3>
            
            <div class="contact__info">
                <div class="contact__card">
                    <i class="ri-mail-line contact__card-icon"></i>
                    <h3 class="contact__card-title">Email</h3>
                    <span class="contact__card-data">tanoudialo04@gmail.com</span>
                    <a href="mailto:tanoudialo04@gmail.com" class="contact__button-small">
                        Écrire <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="contact__card">
                    <i class="ri-linkedin-box-line contact__card-icon"></i>
                    <h3 class="contact__card-title">LinkedIn</h3>
                    <span class="contact__card-data">@MamadouTanou</span>
                    <a href="https://linkedin.com" target="_blank" class="contact__button-small">
                        Visiter <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </div>

        <form action="php/contact_form.php" method="POST" class="contact__form" id="contact-form">
            <div class="contact__form-div">
                <label class="contact__form-tag">Nom</label>
                <input type="text" name="Nom" required placeholder="Votre nom" class="contact__form-input">
            </div>

            <div class="contact__form-div">
                <label class="contact__form-tag">Email</label>
                <input type="email" name="Email" required placeholder="Votre email" class="contact__form-input">
            </div>

            <div class="contact__form-div contact__form-area">
                <label class="contact__form-tag">Message</label>
                <textarea name="besoin" required placeholder="Votre message" class="contact__form-input"></textarea>
            </div>

            <p class="contact__message" id="contact-message"></p>

            <button type="submit" class="button">
                <?= $tr['send'] ?? 'Envoyer le message' ?> <i class="ri-send-plane-fill"></i>
            </button>
        </form>
    </div>
</section>