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
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://startbootstrap.com/assets/style-snippet.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">

    <link rel="icon" type="image/png" href="../assets/logos/logo.png">
</head>
<body>
<div class="cabecalho">
    <div class="row">
        <div class="col-lg-6">
            <h2><a href="../index.php"><i class="fas fa-arrow-left"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;Painel do Tesoureiro</h2><br><br>
        </div>
        <div class="col-lg-6" style="text-align: right">
            <a style="font-size: 2em" href="../logout.php">Sair <i class="far fa-sign-out"></i></a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="row">Total: </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td class="text-center">- R$ 205,00</td>
                    </tr>
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Valor</th>
                        <th class="text-center" scope="col" colspan="2">Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">01/01/2020</th>
                        <td>Conamesco</td>
                        <td>Ajuda de custo</td>
                        <td>- R$120,00</td>
                        <td class="text-center editar"><i class="fas fa-pencil-alt"></i></td>
                        <td class="text-center delete"><i class="far fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">01/01/2020</th>
                        <td>Sítio</td>
                        <td>Ajuda de custos</td>
                        <td>- R$100,00</td>
                        <td class="text-center editar"><i class="fas fa-pencil-alt"></i></td>
                        <td class="text-center delete"><i class="far fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">01/01/2020</th>
                        <td>Guilherme</td>
                        <td>Mensalidade Janeiro</td>
                        <td>+ R$15,00</td>
                        <td class="text-center editar"><i class="fas fa-pencil-alt"></i></td>
                        <td class="text-center delete"><i class="far fa-trash-alt"></i></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="Mohsin">
                </div>
                <div class="form-group">

                    <input class="form-control " type="text" placeholder="Irshad">
                </div>
                <div class="form-group">
                    <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</body>
</html>