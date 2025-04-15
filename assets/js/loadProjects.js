document.addEventListener('DOMContentLoaded', function () {
    const loadMoreButton = document.getElementById('showMoreProjects');
    const projectsContainer = document.getElementById('projectsContainer');

    if (loadMoreButton) {
        let offset = 3; // Initial offset, assuming the first 3 projects are already loaded

        loadMoreButton.addEventListener('click', function () {
            fetch(`php/get_more_project.php?offset=${encodeURIComponent(offset)}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.length === 0) {
                        loadMoreButton.style.display = 'none'; // Hide the button if no more projects
                        return;
                    }

                    data.forEach(project => {
                        const projectCard = document.createElement('article');
                        projectCard.classList.add('projects__card');

                        if (project.image) {
                            const img = document.createElement('img');
                            img.src = project.image; // Ensure the server provides safe URLs
                            img.alt = project.name; // Escape project name for safety
                            img.classList.add('projects__img');
                            projectCard.appendChild(img);
                        }

                        const modal = document.createElement('div');
                        modal.classList.add('projects__modal');

                        const subtitle = document.createElement('span');
                        subtitle.classList.add('projects__subtitle');
                        subtitle.textContent = project.category; // Use textContent to prevent XSS
                        modal.appendChild(subtitle);

                        const title = document.createElement('h2');
                        title.classList.add('projects__title');
                        title.textContent = project.name; // Use textContent to prevent XSS
                        modal.appendChild(title);

                        projectCard.appendChild(modal);
                        projectsContainer.appendChild(projectCard);
                    });

                    offset += 3; // Load the next 3 projects on the next click
                })
                .catch(error => console.error('Error fetching projects:', error));
        });
    }
});

// Function to load and display the description of a project
function loadDescription(projectId) {
    const descriptionElement = document.getElementById('description-' + projectId);

    if (!descriptionElement) {
        console.error(`Element description-${projectId} not found.`);
        return;
    }

    fetch(`php/get_description.php?id=${encodeURIComponent(projectId)}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data && data.description) {
                descriptionElement.textContent = data.description; // Use textContent to prevent XSS
                descriptionElement.classList.add('projects__description-text');
                descriptionElement.style.display = 'block';
            } else {
                console.error('No description found for project ID:', projectId);
            }
        })
        .catch(error => console.error('Error fetching description:', error));
}