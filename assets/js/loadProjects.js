// Fichier js qui permet de charger dynamiquement mes projets
document.addEventListener('DOMContentLoaded', function() {
    const projectsContainer = document.querySelector('.projects__container');
    fetch('../php/get_projet.php')
        .then(response => response.json())
        .then(data => {
            data.forEach(project => {
                const projectCard = document.createElement('article');
                projectCard.classList.add('projects__card');

                if (project.image) {
                    const img = document.createElement('img');
                    img.src = project.image;
                    img.alt = project.name;
                    img.classList.add('projects__img');
                    projectCard.appendChild(img);
                }

                const modal = document.createElement('div');
                modal.classList.add('projects__modal');

                const subtitle = document.createElement('span');
                subtitle.classList.add('projects__subtitle');
                subtitle.textContent = project.category;
                modal.appendChild(subtitle);

                const title = document.createElement('h2');
                title.classList.add('projects__title');
                title.textContent = project.name;
                modal.appendChild(title);

                const description = document.createElement('p');
                description.textContent = project.description;
                modal.appendChild(description);

                const link = document.createElement('a');
                link.href = project.show_more_link;
                link.classList.add('projects__button');
                link.innerHTML = 'Voir plus <i class="ri-external-link-line"></i>';
                console.log('Show More Link:', project.show_more_link); // Debugging log
                modal.appendChild(link);

                projectCard.appendChild(modal);
                projectsContainer.appendChild(projectCard);
            });
        });
});