document.addEventListener('DOMContentLoaded', function () {
    const loadMoreButton = document.getElementById('showMoreProjects');
    const projectsContainer = document.getElementById('projectsContainer');

    if (loadMoreButton) {
        let offset = 3; 

        loadMoreButton.addEventListener('click', function () {
            fetch(`php/get_more_project.php?offset=${encodeURIComponent(offset)}`)
                .then(response => {
                    if (!response.ok) throw new Error('Network response was not ok');
                    return response.json();
                })
                .then(data => {
                    if (data.length === 0) {
                        loadMoreButton.style.display = 'none';
                        return;
                    }

                    data.forEach(project => {
                        // Carte principale
                        const projectCard = document.createElement('article');
                        projectCard.classList.add('projects__card');

                        // 1. DIV IMAGE
                        const imgBox = document.createElement('div');
                        imgBox.classList.add('projects__image-box');
                        
                        if (project.image) {
                            const img = document.createElement('img');
                            img.src = project.image;
                            img.alt = project.name;
                            img.classList.add('projects__img');
                            imgBox.appendChild(img);
                        }
                        projectCard.appendChild(imgBox);

                        // 2. DIV CONTENU
                        const contentBox = document.createElement('div');
                        contentBox.classList.add('projects__content');

                        // Titre
                        const title = document.createElement('h3');
                        title.classList.add('projects__title');
                        title.textContent = project.name;
                        contentBox.appendChild(title);

                        // Description
                        const desc = document.createElement('p');
                        desc.classList.add('projects__description');
                        desc.textContent = project.description || "";
                        contentBox.appendChild(desc);

                        // Bouton
                        const link = document.createElement('a');
                        link.href = project.show_more_link;
                        link.target = "_blank";
                        link.classList.add('projects__button');
                        link.innerHTML = 'Code Source <i class="ri-github-line"></i>';
                        contentBox.appendChild(link);

                        projectCard.appendChild(contentBox);
                        projectsContainer.appendChild(projectCard);
                    });

                    offset += 3;
                })
                .catch(error => console.error('Error fetching projects:', error));
        });
    }
});