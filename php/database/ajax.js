document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('login-form');
    const loginMessage = document.getElementById('login-message');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(loginForm);

        fetch('connexion.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            loginMessage.textContent = data.message;
            loginMessage.style.color = (data.status === 'success') ? 'green' : 'red';

            if (data.status === 'success') {
                setTimeout(() => {
                    window.location.href = 'database.php';
                }, 1500); // Pause de 1,5 sec avant redirection
            }
        })
        .catch(() => {
            loginMessage.textContent = 'Erreur lors de la connexion.';
            loginMessage.style.color = 'red';
        });
    });
});
