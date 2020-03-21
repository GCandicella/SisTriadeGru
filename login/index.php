<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:../index.html');
}

$user = 'Guilherme';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SisTriadeGru | Login</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://startbootstrap.com/assets/style-snippet.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="icon" type="image/png" href="./assets/logos/logo.png">
</head>
<body>
<div class="cabecalho">
    <div class="row">
        <div class="col-lg-6">
            <h2>Seja bem-vindo, <?php echo $user?>.</h2>
        </div>
        <div class="col-lg-6" style="text-align: right">
            <a href="logout.php"><i style="font-size: 2em" class="far fa-sign-out"></i></a>
        </div>
    </div>
</div>
    <section class="after-loop">
        <div class="container">
            <div class="text-center"><img width="30%" src="./assets/logos/logo.png"></div><br><br>
            <hr class="my-4">
            <div class="row">
                <div class="col-lg-4 col-md-8 mb-5 mb-lg-0 mx-auto">
                    <a href="./tesouraria/" class="after-loop-item card border-0 card-themes shadow-lg">
                        <div class="card-body d-flex align-items-end flex-column text-right">
                            <h4>Tesouraria</h4>
                            <p class="w-75">Consulte as finanças e extrato do capítulo nos últimos tempos</p>
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-8 mb-5 mb-lg-0 mx-auto">
                    <a href="./escrivao/" class="after-loop-item card border-0 card-templates shadow-lg">
                        <div class="card-body d-flex align-items-end flex-column text-right">
                            <h4>Escrivão</h4>
                            <p class="w-75">Produção, edição e consulta de atas e listas de presença</p>
                            <i class="fal fa-pen-fancy"></i>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-8 mx-auto">
                    <a href="./rituais/" class="after-loop-item card border-0 card-guides shadow-lg">
                        <div class="card-body d-flex align-items-end flex-column text-right">
                            <h4>Ritualística</h4>
                            <p class="w-75">Guias, manuais e cerimônias públicas em fácil acesso</p>
                            <i class="fal fa-books"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>