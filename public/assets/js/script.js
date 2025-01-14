// Exemplo de validação de formulário para o login
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', (e) => {
            const emailInput = document.querySelector('#login');
            const senhaInput = document.querySelector('#senha');

            if (!emailInput.value || !senhaInput.value) {
                alert('Por favor, preencha todos os campos!');
                e.preventDefault();
            } else if (!validateEmail(emailInput.value)) {
                alert('Por favor, insira um e-mail válido!');
                e.preventDefault();
            }
        });
    }
});

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
