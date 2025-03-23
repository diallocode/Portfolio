document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    const contactMessage = document.getElementById('contact-message');

    contactForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(contactForm);

        fetch('php/contact_form.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                contactMessage.textContent = data.message;
                contactMessage.style.color = 'green';
                contactForm.reset();
            } else {
                contactMessage.textContent = data.message;
                contactMessage.style.color = 'red';
            }
        })
        .catch(error => {
            contactMessage.textContent = 'Erreur lors de l\'envoi du message.';
            contactMessage.style.color = 'red';
        });
    });
});