document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // Se quiser que a animação ocorra apenas uma vez, desobserve o elemento
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Selecione os elementos que você deseja animar ao rolar a página
    const elementsToAnimate = document.querySelectorAll('.habilidades, .projetos, .contato, .footer');
    elementsToAnimate.forEach(element => observer.observe(element));
});

// Tema dark e light
document.addEventListener('DOMContentLoaded', function () {
    const themeToggle = document.getElementById('theme-toggle');

    themeToggle.addEventListener('click', function () {
        document.body.classList.toggle('light-theme');

        if (document.body.classList.contains('light-theme')) {
            themeToggle.innerHTML = '<i class="bi bi-sun-fill"></i>';
        } else {
            themeToggle.innerHTML = '<i class="bi bi-moon-fill"></i>';
        }
    });
});

// Typewriter header
document.addEventListener('DOMContentLoaded', () => {
    const textToType = "Olá, me chamo<br>Victor Gabriel :)";
    const typingSpeed = 100;

    let index = 0;
    const typewriterElement = document.getElementById('typewriter');

    function typeEffect() {
        if (index < textToType.length) {
            if (textToType.charAt(index) === "<") {
                const closingTag = textToType.indexOf(">", index);
                if (closingTag !== -1) {
                    typewriterElement.innerHTML += textToType.slice(index, closingTag + 1);
                    index = closingTag + 1;
                } else {
                    typewriterElement.innerHTML += textToType.charAt(index);
                    index++
                }
            } else {
                typewriterElement.innerHTML += textToType.charAt(index);
                index++;
            }
            setTimeout(typeEffect, typingSpeed)
        }
    }
    typeEffect();
});

// Abrir modal sem PHP

document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Impede o envio do formulário

    // Exibe o modal Bootstrap
    let modal = new bootstrap.Modal(document.getElementById('feedbackModal'));
    modal.show();

    // Opcional: Limpa o formulário após exibir o modal
    document.getElementById("contact-form").reset();
});


// Validação Formulário Contato
// Caso use este método coloque action="sendmail.php" no formulário e remova o script acima
/*
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form');

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault(); // Impede o redirecionamento padrão

            const countryCode = document.getElementById('country-code').value.trim();
            const phoneNumber = document.getElementById('phone').value.trim();

            if (!countryCode || !phoneNumber) {
                alert("Por favor, insira um número de telefone válido.");
                return;
            }

            const formData = new FormData(form);

            formData.set('phone', `${countryCode} ${phoneNumber}`);

            fetch('sendmail.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {

                    const feedbackModalElement = document.getElementById('feedbackModal');
                    if (feedbackModalElement) {
                        document.querySelector('#feedbackModal .modal-body').innerText = data;
                        const feedbackModal = new bootstrap.Modal(feedbackModalElement);
                        feedbackModal.show();
                    } else {
                        alert(data);
                    }
                    form.reset();
                })
                .catch(error => {
                    console.error('Erro:', error);
                    alert("Erro ao enviar a mensagem.");
                });
        });
    }
});
*/