function validateForm() {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let message = document.getElementById('message').value;
    let responseMessage = document.getElementById('form-response');

    if (!validateName(name)) {
        responseMessage.style.color = "red";
        responseMessage.textContent = "Please enter a valid name (only letters and apostrophe allowed).";
        return false;
    }

    if (email && !email.endsWith('@gmail.com')) {
        email += '@gmail.com';
        document.getElementById('email').value = email;
    }

    if (!validateEmail(email)) {
        responseMessage.style.color = "red";
        responseMessage.textContent = "Please enter a valid email address.";
        return false;
    }

    if (name === "" || email === "" || message === "") {
        responseMessage.style.color = "red";
        responseMessage.textContent = "Please fill in all fields.";
        return false;
    }

    responseMessage.style.color = "green";
    responseMessage.textContent = "Thank you for your message! We will get back to you shortly.";
   
    document.getElementById('contact-form').reset();
    return false;  
}

function validateName(name) {
    const regex = /^[a-zA-Z\s']+$/;
        return regex.test(name);
}

function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

document.getElementById('email').addEventListener('input', function() {
    let email = this.value;

    if (email && !email.endsWith('@gmail.com')) {
        let atIndex = email.indexOf('@');
        if (atIndex === -1) {
            this.value = email + '@gmail.com';
        } else {
            this.value = email.substring(0, atIndex) + '@gmail.com';
        }
    }
});
