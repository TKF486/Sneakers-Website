function password_show() {
    var x = document.getElementById("input_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}


