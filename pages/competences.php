<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<section class="skills section" id="skills">
    <div class="skills__container container grid">
        <div class="skills__data">
            <h3 class="section__subtitle">
                <?= $tr['favorite'] ?? 'Favorite' ?> <span><?= $tr['skills'] ?? 'Skills' ?></span>
            </h3>

            <h2 class="section__title">
                <?= $tr['competences'] ?? 'Compétences' ?>
            </h2>
        </div>

        <div class="skills__content">
            <div class="skills__group">
                <div class="skills__item">
                    <i class="ri-code-line skills__icon"></i>
                    <div>
                        <h3 class="skills__title"><?= $tr['programming_languages_title'] ?? 'Langages de programmation' ?></h3>
                        <span class="skills__subtitle"><?= $tr['programming_languages'] ?? 'Python, C, Java, Haskell, Prolog, RISC-V' ?></span>
                    </div>
                </div>
                <div class="skills__item">
                    <i class="ri-window-line skills__icon"></i>
                    <div>
                        <h3 class="skills__title"><?= $tr['web_dev_title'] ?? 'Développement web' ?></h3>
                        <span class="skills__subtitle"><?= $tr['web_tech'] ?? 'JavaScript, HTML, CSS, SQL' ?></span>
                    </div>
                </div>
                <div class="skills__item">
                    <i class="ri-tools-line skills__icon"></i>
                    <div>
                        <h3 class="skills__title"><?= $tr['tools_env_title'] ?? 'Outils et environnements' ?></h3>
                        <span class="skills__subtitle"><?= $tr['tools_env'] ?? 'Git, Linux' ?></span>
                    </div>
                </div>
                <div class="skills__item">
                    <i class="ri-shield-keyhole-line skills__icon"></i>
                    <div>
                        <h3 class="skills__title"><?= $tr['cyber_title'] ?? 'Cybersécurité et réseaux' ?></h3>
                        <span class="skills__subtitle"><?= $tr['cyber_tools'] ?? 'Metasploit, Nmap, Nessus, Wireshark' ?></span>
                    </div>
                </div>
                <div class="skills__item">
                    <i class="ri-team-line skills__icon"></i>
                    <div>
                        <h3 class="skills__title"><?= $tr['soft_skills'] ?? 'Soft skills' ?></h3>
                        <span class="skills__subtitle"><?= $tr['soft_skills_desc'] ?? "Capable de travailler en équipe et un bon niveau d'anglais" ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
