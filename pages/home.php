<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$lang = $_SESSION['lang'] ?? 'en';
$tr = include __DIR__ . '/../lang/' . $lang . '.php';
?>

<section class="home section" id="home">
    <div class="home__container container grid">
        <div class="home__content">
            <div class="home__data">
                <h3 class="home__subtitle"><?= $tr['hello'] ?? 'Bonjour,' ?></h3>
                <h1 class="home__title"><?= $tr['my_name'] ?? 'Je suis Mamadou Tanou Diallo' ?></h1>
                <h3 class="home__education"><?= $tr['student_info'] ?? 'Étudiant en Informatique' ?></h3>
                <p class="home__description"><?= $tr['home_description'] ?? 'Passionné par la cybersécurité, le développement web et les réseaux, je suis toujours motivé pour apprendre de nouvelles technologies et relever de nouveaux défis.' ?></p>

               <!-- Bouton pour télécharger le CV -->
               <a href="/Public/Mamadou_Tanou_DIALLO_CV-1.pdf" class="button cv__button">
                <?= $tr['download_cv'] ?? 'Voir mon CV' ?>
            </a>
            </div>
        </div>

         <!-- Image de progile du site avec son code svg -->
         <div class="home__image">
            <svg class="home__blob" viewBox="0 0 550 591" xmlns="http://www.w3.org/2000/svg">
                <mask id="maskBlob" mask-type="alpha">
                   <path d="M263 47.1782C270.426 42.891 279.574 42.891 287 47.1782L501.157 
                   170.822C508.583 175.109 513.157 183.032 513.157 191.606V438.894C513.157 
                   447.468 508.583 455.391 501.157 459.678L287 583.322C279.574 587.609 270.426 
                   587.609 263 583.322L48.843 459.678C41.4174 455.391 36.843 447.468 36.843 
                   438.894V191.606C36.843 183.032 41.4174 175.109 48.843 170.822L263 47.1782Z"/>
                </mask>
                <g mask="url(#maskBlob)">
                   <path d="M263 47.1782C270.426 42.891 279.574 42.891 287 47.1782L501.157 
                   170.822C508.583 175.109 513.157 183.032 513.157 191.606V438.894C513.157 
                   447.468 508.583 455.391 501.157 459.678L287 583.322C279.574 587.609 270.426 
                   587.609 263 583.322L48.843 459.678C41.4174 455.391 36.843 447.468 36.843 
                   438.894V191.606C36.843 183.032 41.4174 175.109 48.843 170.822L263 47.1782Z"/>
             
                   <rect x="37" width="476" height="630" fill="url(#pattern0)"/>
                </g>
             
                <rect x="37" width="476" height="300" fill="url(#pattern1)"/>
             
                <defs>
                   <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                      <use href="#imageBlob" transform="matrix(0.00143057 0 0 0.00108108 0.0404062 0)"/>
                   </pattern>
             
                   <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                      <use href="#imageBlob" transform="matrix(0.00143057 0 0 0.00226984 0.0404062 0)"/>
                   </pattern>
             
                   <!-- Insert your profile (recommended size: 640 x 940) -->
                   <image  class="home__img" id="imageBlob" width="640" height="925" href="/assets/images/tanou.png"/>
                </defs>
             </svg>
        </div>
    </div>
</section>
