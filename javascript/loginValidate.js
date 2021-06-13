const form = document.querySelector('#login_form');
const email_reg = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
const pass_reg = /^(?=.*[A-Za-z])(?=.*[A-Za-z])(?=.*\d)[a-zA-Z\d.]{8,}$/;


let email = form.elements.namedItem("email");
let password = form.elements.namedItem("password");


email.addEventListener('input', validate);
password.addEventListener('input', validate);


function validate(e) {

    if (e.target.name == "email") {
        if (email_reg.test(e.target.value)) {
            e.target.classList.add('valid');
            e.target.classList.remove('invalid');
        } else {
            e.target.classList.add('invalid');
            e.target.classList.remove('valid');
        }
    }

    if (e.target.name == "password") {
        if (pass_reg.test(e.target.value)) {
            e.target.classList.add('valid');
            e.target.classList.remove('invalid');
        } else {
            e.target.classList.add('invalid');
            e.target.classList.remove('valid');
        }
    }






}