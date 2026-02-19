/*==================== SHOW MENU ====================*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/* Validate if constant exists */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/* Validate if constant exists */
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*==================== CHANGE BACKGROUND HEADER ====================*/
function scrollHeader(){
    const header = document.getElementById('header')
    // When the scroll is greater than 50 viewport height, add the scroll-header class
    if(this.scrollY >= 50) header.classList.add('blur-header'); else header.classList.remove('blur-header')
}
window.addEventListener('scroll', scrollHeader)

/*==================== SHOW SCROLL UP ====================*/
function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 350 viewport height, add the show-scroll class
    if(this.scrollY >= 350) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 58
        const sectionId = current.getAttribute('id')
        const sectionsClass = document.querySelector('.nav__menu a[href*=' + sectionId + ']')

        if(sectionsClass){
            if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
                sectionsClass.classList.add('active-link')
            }else{
                sectionsClass.classList.remove('active-link')
            }
        }
    })
}
window.addEventListener('scroll', scrollActive)

/*==================== SCROLL REVEAL ANIMATION ====================*/
// Vérification que ScrollReveal est bien chargé
if (typeof ScrollReveal !== 'undefined') {
    
    const sr = ScrollReveal({
        origin: 'top',
        distance: '60px',
        duration: 2500,
        delay: 400,
        // reset: true // Animations repeat (optionnel, souvent mieux à false pour un portfolio)
    })

    // --- HOME ---
    sr.reveal(`.home__data`)
    sr.reveal(`.home__image`, {delay: 500})
    sr.reveal(`.home__social`, {delay: 600})
    
    // --- TITRES DE SECTIONS ---
    sr.reveal(`.section__title, .section__subtitle`, {interval: 100})

    // --- SKILLS ---
    sr.reveal(`.skills__tech`, {origin: 'left'})
    sr.reveal(`.skills__transverse`, {origin: 'right'})
    
    // --- PROJECTS ---
    // L'intervalle crée un effet de cascade (les cartes apparaissent une par une)
    sr.reveal(`.projects__card`, {interval: 200}) 

    // --- ABOUT / EDUCATION ---
    sr.reveal(`.about__tabs`, {delay: 200})
    sr.reveal(`.timeline__item`, {interval: 200, origin: 'left'})
    sr.reveal(`.cert__card`, {interval: 200, origin: 'right'})
    sr.reveal(`.hobby__tag`, {interval: 100, origin: 'bottom'})

    // --- EXPERIENCE ---
    sr.reveal(`.experience__data`, {interval: 200})

    // --- CONTACT ---
    sr.reveal(`.contact__info`, {origin: 'left'})
    sr.reveal(`.contact__form`, {origin: 'right'})

    // --- FOOTER ---
    sr.reveal(`.footer`, {delay: 100, origin: 'bottom'})
}