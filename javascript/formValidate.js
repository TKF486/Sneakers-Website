const form = document.querySelector('#signup-form');
const name_reg = /^[a-zA-Z-' ]*$/;
const email_reg = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
const year_reg = /^(19|20)\d{2}$/;
const pass_reg = /^(?=.*[A-Za-z])(?=.*[A-Za-z])(?=.*\d)[a-zA-Z\d.]{8,}$/;
const phone_reg = /^(\+?6?01)[0-46-9][0-9]{7,8}$/;

let fname = form.elements.namedItem("fname");
let lname = form.elements.namedItem("lname");
let email = form.elements.namedItem("email");
let password = form.elements.namedItem("password");
let phone = form.elements.namedItem("phone");

// let dob_day = form.elements.namedItem("dob_day");
// let dob_month = form.elements.namedItem("dob_month");
// let dob_year = form.elements.namedItem("dob_year");

fname.addEventListener('input', validate);
lname.addEventListener('input', validate);
email.addEventListener('input', validate);
password.addEventListener('input', validate);
phone.addEventListener('input', validate);

// dob_day.addEventListener('input', validate);
// dob_month.addEventListener('input', validate);
// dob_year.addEventListener('input', validate);

// form.addEventListener('submit', function (e) {
//     e.preventDefault();

//     alert('SUBMITTED');
//     return true;
// });

function validate(e) {

    if (e.target.name == "fname") {
        if (name_reg.test(e.target.value)) {
            e.target.classList.add('valid');
            e.target.classList.remove('invalid');
        } else {
            e.target.classList.add('invalid');
            e.target.classList.remove('valid');
        }
    }

    if (e.target.name == "lname") {
        if (name_reg.test(e.target.value)) {
            e.target.classList.add('valid');
            e.target.classList.remove('invalid');
        } else {
            e.target.classList.add('invalid');
            e.target.classList.remove('valid');
        }
    }

    if (e.target.name == "phone") {
        if (phone_reg.test(e.target.value)) {
            e.target.classList.add('valid');
            e.target.classList.remove('invalid');
        } else {
            e.target.classList.add('invalid');
            e.target.classList.remove('valid');
        }
    }

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


function emailCheck() {
    var x = document.getElementById("email").value;
    console.log(x);
    let xmlhttp;
    if (x.length !== 0) {
        xmlhttp = new XMLHttpRequest();
        console.log("pass");
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                console.log("pass1.5");
                if (xmlhttp.responseText === '1') {
                    emailExistedErr(1);
                    document.querySelector("button").disabled = true;
                    console.log("pass1");
                } else {
                    emailExistedErr(0);
                    document.querySelector("button").disabled = false;
                    console.log("pass2");
                }
            }
        };
        xmlhttp.open("GET", "form.php?email=" + x, true);
        xmlhttp.send(null);
    }
}

function emailExistedErr(i){
    if(i===1)
        document.querySelector("#emailError").style.display = "block";
    else
        document.querySelector("#emailError").style.display = "none";
}

// function emailCheck() {
//     var x = document.getElementById("email");
//     x.value = x.value.toUpperCase();
//   }
     
