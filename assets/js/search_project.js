document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search");
    const projectsContainer = document.getElementById("projectsContainer");

    function searchProjects() {
        const query = searchInput.value.trim();

        if (query.length > 0) {
            const params = new URLSearchParams();
            params.append("search", query);

            fetch("../php/search_project.php?" + params.toString())
                .then(response => response.json())
                .then(data => {
                    projectsContainer.innerHTML = "";

                    data.forEach(project => {
                        const projectElement = document.createElement('article');
                        projectElement.className = 'projects__card';

                        if (project.image) {
                            const img = document.createElement('img');
                            img.src = project.image;
                            img.alt = project.name;
                            img.className = 'projects__img';
                            projectElement.appendChild(img);
                        }

                        const modal = document.createElement('div');
                        modal.className = 'projects__modal';

                        const subtitle = document.createElement('span');
                        subtitle.className = 'projects__subtitle';
                        subtitle.textContent = project.category;

                        const title = document.createElement('h2');
                        title.className = 'projects__title';
                        title.textContent = project.name;

                        const desc = document.createElement('p');
                        desc.id = `description-${project.id}`;
                        desc.style.display = 'none';

                        const descBtn = document.createElement('button');
                        descBtn.className = 'projects__description';
                        descBtn.textContent = 'Voir plus';
                        descBtn.setAttribute('onclick', `loadDescription(${project.id})`);

                        const link = document.createElement('a');
                        link.href = project.show_more_link;
                        link.className = 'projects__button';
                        link.innerHTML = 'Git <i class="ri-external-link-line"></i>';

                        modal.appendChild(subtitle);
                        modal.appendChild(title);
                        modal.appendChild(desc);
                        modal.appendChild(descBtn);
                        modal.appendChild(link);

                        projectElement.appendChild(modal);
                        projectsContainer.appendChild(projectElement);
                    });
                })
                .catch(error => {
                    console.error('Erreur lors de la recherche de projet :', error);
                });
        } else {
            projectsContainer.innerHTML = "";
        }
    }

    searchInput.addEventListener("input", searchProjects);
});
