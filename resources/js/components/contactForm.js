const contactForm = document.getElementById('contact-form');
const nameInput = document.getElementById('name');
const phoneInput = document.getElementById('phone');
const emailInput = document.getElementById('email');
const messageInput = document.getElementById('message');
const btnSubmit = document.getElementById('btn-submit-message');
const btnSubmitText = document.getElementById('btn-submit-text');
const contactFormSpinner = document.getElementById('contact-form-spinner');
const feedback = document.getElementById('feedback');  
const csrfToken = document.querySelector('#contact-form input[name="_token"]');


let clearFeedbackTimeout; 

if(contactForm) {

    contactForm.addEventListener('submit', function(event) {
    event.preventDefault();

    feedback.textContent = '';
    contactFormSpinner.classList.remove('hidden');
    feedback.classList.remove('error');
    feedback.classList.remove('success');
    feedback.classList.remove('enter');
    feedback.classList.remove('leave');

    nameInput.disabled = true;
    phoneInput.disabled = true;
    emailInput.disabled = true;
    messageInput.disabled = true;
    btnSubmitText.innerHTML = 'Enviando...';
    btnSubmit.disabled = true;
    contactFormSpinner.classList.remove('hidden');

    const formData = {
        name: nameInput.value,
        phone: phoneInput.value,
        email: emailInput.value,
        message: messageInput.value
    };


    fetch('/api/message', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken.value ?? '' 
        },
        body: JSON.stringify(formData)
    })
    .then(response => response.json().then(data => ({ status: response.status, body: data }))) 
    .then(result => {
        const { status, body } = result;

        if (status === 200) {
            nameInput.value = '';
            phoneInput.value = '';
            emailInput.value = '';
            messageInput.value = '';
            feedback.classList.add('success');
            feedback.classList.add('enter');
            feedback.textContent = 'Mensagem enviada com sucesso!';
            return;
        }
        
        if (status === 422) {
            feedback.classList.add('error');
            feedback.classList.add('enter');
            feedback.innerHTML = 'Erros no formulário: <br>' + Object.values(body.errors).join('<br>');
            return;
        }
        
        if (status === 429) {
            feedback.classList.add('error');
            feedback.classList.add('enter');
            feedback.textContent = 'Você atingiu o limite de envio de mensagens. Tente novamente mais tarde.';;
            return;
        } 
    
        feedback.classList.add('error');
        feedback.classList.add('enter');
        feedback.textContent = 'Erro ao enviar mensagem. Tente novamente mais tarde.';
    })
    .catch(error => {
        console.error(error);
        feedback.classList.add('error');
        feedback.classList.add('enter');
        feedback.textContent = 'Erro ao enviar mensagem! Verifique sua conexão e tente novamente.';

        clearTimeout(clearFeedbackTimeout); 
        clearFeedbackTimeout = setTimeout(() => {
            feedback.textContent = '';
            feedback.classList.add('leave');
        }, 5000);
    })
    .finally(() => {
        nameInput.disabled = false;
        phoneInput.disabled = false;
        emailInput.disabled = false;
        messageInput.disabled = false;
        btnSubmit.disabled = false;
        contactFormSpinner.classList.add('hidden');
        btnSubmitText.innerHTML = 'Enviar';

        clearTimeout(clearFeedbackTimeout);

        clearFeedbackTimeout = setTimeout(() => {
            feedback.textContent = '';
            feedback.classList.add('leave');
        }, 5000);
        });
    });

    phoneInput.addEventListener('input', function (event) {
    let input = event.target;
    let phone = input.value.replace(/\D/g, '');
    let formattedPhone = '';

    if (phone.length > 10) {
        formattedPhone = phone.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3'); 
    } else if (phone.length > 6) {
        formattedPhone = phone.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, '($1) $2-$3'); 
    } else if (phone.length > 2) {
        formattedPhone = phone.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
    } else if (phone.length > 0) {
        formattedPhone = phone.replace(/^(\d{0,2})/, '($1'); 
    }

        input.value = formattedPhone;
    });

    phoneInput.addEventListener('keydown', function (event) {
    let key = event.key;
    if (key === 'Backspace' || key === 'Delete') {
        return;
    }
    });
}
