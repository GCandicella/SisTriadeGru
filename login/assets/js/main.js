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

function mostrarErro() {
    var div = document.getElementById('msg-erro'); // Captura o id msg-erro
    div.style.display = 'block'; // Mostra a msg-erro
}