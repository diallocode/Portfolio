document.addEventListener('DOMContentLoaded', function() {
    const loadMoreButton = document.getElementById('showMoreProjects');
    const projectsContainer = document.getElementById('projectsContainer');

    if (loadMoreButton) {
        let offset = 3; // Initial offset, assuming the first 5 projects are already loaded

        loadMoreButton.addEventListener('click', function() {
            fetch(`php/get_more_project.php?offset=${offset}`)
                .then(response => response.json())
                .then(data => {
                    if (data.length === 0) {
                        loadMoreButton.style.display = 'none'; // Cacher le bouton s'il n'y a plus de projets
                        return;
                    }

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
                        description.classList.add('projects__description-text');
                        description.id = 'description-' + project.id;
                        description.style.display = 'none'; // Ensure the description is hidden by default
                        modal.appendChild(description);

                        const showDescriptionButton = document.createElement('button');
                        showDescriptionButton.classList.add('projects__description');
                        showDescriptionButton.textContent = 'Voir plus';
                        showDescriptionButton.onclick = function() {
                            loadDescription(project.id);
                        };
                        modal.appendChild(showDescriptionButton);

                        const link = document.createElement('a');
                        link.href = project.show_more_link;
                        link.classList.add('projects__button');
                        link.innerHTML = 'Git <i class="ri-external-link-line"></i>';
                        modal.appendChild(link);

                        projectCard.appendChild(modal);
                        projectsContainer.appendChild(projectCard);
                    });

                    offset += 3; // Charger les 3 prochains projets au prochain clic
                })
                .catch(error => console.error('Error fetching projects:', error));
        });
    }
});

function loadDescription(projectId) {
    const descriptionElement = document.getElementById('description-' + projectId);

    if (!descriptionElement) {
        console.error(`Element description-${projectId} non trouvé.`);
        return;
    }

    fetch(`php/get_description.php?id=${projectId}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Problème réseau');
            }
            return response.json();
        })
        .then(data => {
            if (data && data.description) {
                descriptionElement.textContent = data.description;
                descriptionElement.classList.add('projects__description-text');
                descriptionElement.style.display = 'block';
            } else {
                console.error('Aucune description trouvée pour le projet ID:', projectId);
            }
        })
        .catch(error => console.error('Erreur récupération description:', error));
}
