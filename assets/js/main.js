function showPass() {
    let x = document.getElementById("inputPassword");
    let eye = document.getElementById("eyePass");
    if(eye.classList.contains('fa-eye')){
        eye.classList.remove('fa-eye');
        eye.classList.add('fa-eye-slash');
    }
    else {
        eye.classList.add('fa-eye');
        eye.classList.remove('fa-eye-slash');
    }

    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}