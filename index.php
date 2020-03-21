<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SisTriadeGru | Login</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="icon" type="image/png" href="assets/logos/logo.png">
</head>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center"><img width="80%" src="assets/logos/logo.png"></h5>
                        <div id="msg-erro" style="display: none" class="alert alert-warning fade show" role="alert">
                            <strong>Email ou senha incorretos!</strong>
                        </div>
                        <form class="form-signin" method="post">
                            <div class="form-label-group">
                                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email / Login" required autofocus>
                                <label for="inputEmail">Email / Login</label>
                            </div>

                            <div class="form-label-group">
                                <input style="z-index: 1;" type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
                                <span class="versenha" onclick="showPass()"><i id="eyePass" class="fa fa-fw fa-eye"></i></span>
                                <label for="inputPassword">Password</label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Lembrar da senha</label>
                            </div>
                            <button class="btn btn-lg btn-danger btn-block text-uppercase" type="submit">Sign in</button>
                            <hr class="my-4">
                            <button class="btn btn-lg btn-google btn-block text-uppercase"><a style="color: #222" href="#"> - Solicitar Registro - </a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
</body>
</html>
<?php

$user = $_POST['inputEmail'];
$senha = $_POST['inputPassword'];

if(isset($user) && isset($senha)){
    if($user != 'demolay@triade.com'){
        echo '<script>mostrarErro()</script>';
    }
    else{
        session_start();
        $_SESSION['login'] = $user;
        $_SESSION['senha'] = $senha;
        header('location: ./login/');
    }
}
?>