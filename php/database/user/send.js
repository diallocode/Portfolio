document.addEventListener('DOMContentLoaded', function() {
    const addUserForm = document.getElementById('add-user-form');
    const addUserMessage = document.getElementById('add-user-message');

    addUserForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(addUserForm);

        fetch('add_user.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                addUserMessage.textContent = data.message;
                addUserMessage.style.color = 'green';
                addUserForm.reset();
            } else {
                addUserMessage.textContent = data.message;
                addUserMessage.style.color = 'red';
            }
        })
        .catch(error => {
            addUserMessage.textContent = 'Erreur lors de l\'ajout de l\'utilisateur.';
            addUserMessage.style.color = 'red';
        });
    });
});


// Ce js permet d'ajouter un utilisateur avec un login qui lui permet d'acceder aux messages recu dans ma base de donnees