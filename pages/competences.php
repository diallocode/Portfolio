<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<section class="skills section" id="skills">
    <h3 class="section__subtitle">
        <span>02.</span> Stack</span>
    </h3>

    <h2 class="section__title">
        <?= $tr['my_expertise'] ?>
    </h2>

    <div class="skills__container container">
        
        <div class="skills__area skills__tech">
            <h3 class="skills__area-title">
                <i class="ri-code-s-slash-line"></i> <span><?= $tr['Technique'] ?></span>
            </h3>
            
            <div class="skills__grid">
                <div class="skills__card">
                    <div class="skills__header">
                        <i class="ri-terminal-box-line skills__icon"></i>
                        <h3 class="skills__name"><?= $tr['programming'] ?></h3>
                    </div>
                    <div class="skills__list">
                        <span class="skills__tag">Python</span>
                        <span class="skills__tag">C</span>
                        <span class="skills__tag">C++</span>
                        <span class="skills__tag">Java</span>
                        <span class="skills__tag">Haskell</span>
                        <span class="skills__tag">RISC-V</span>
                    </div>
                </div>

                <div class="skills__card">
                    <div class="skills__header">
                        <i class="ri-global-line skills__icon"></i>
                        <h3 class="skills__name">Web & Data</h3>
                    </div>
                    <div class="skills__list">
                        <span class="skills__tag">HTML / CSS</span>
                        <span class="skills__tag">JavaScript</span>
                        <span class="skills__tag">SQL</span>
                        <span class="skills__tag">PHP</span>
                    </div>
                </div>

                <div class="skills__card">
                    <div class="skills__header">
                        <i class="ri-shield-check-line skills__icon"></i>
                        <h3 class="skills__name">Cyber & Tools</h3>
                    </div>
                    <div class="skills__list">
                        <span class="skills__tag">Linux</span>
                        <span class="skills__tag">Git / GitHub</span>
                        <span class="skills__tag">Wireshark</span>
                        <span class="skills__tag">Nmap / Nessus</span>
                        <span class="skills__tag">Metasploit</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="skills__area skills__transverse">
            <h3 class="skills__area-title">
                <i class="ri-user-star-line"></i> <span><?= $tr['Transverse'] ?></span> 
            </h3>

            <div class="skills__soft-grid">
                <div class="skills__soft-box">
                    <h4 class="skills__soft-title"><?= $tr['languages'] ?></h4>
                    <ul class="skills__soft-list">
                        <li>
                            <span class="langues"><?= $tr['French'] ?></span>
                            <span class="skills__level-dot level-native"></span>
                        </li>
                        <li>
                            <span class="langues"><?= $tr['English'] ?></span>
                            <span class="skills__level-dot level-advanced"></span>
                        </li>
                    </ul>
                </div>

                <div class="skills__soft-box">
                    <h4 class="skills__soft-title">Soft Skills</h4>
                    <div class="skills__tags-soft">
                        <span class="skills__tag-soft"><?= $tr['teamwork'] ?></span>
                        <span class="skills__tag-soft"><?= $tr['autonomy'] ?></span>
                        <span class="skills__tag-soft"><?= $tr['curiosity'] ?></span>
                        <span class="skills__tag-soft"><?= $tr['problem_solving'] ?></span>
                        <span class="skills__tag-soft"><?= $tr['project_lead'] ?></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>