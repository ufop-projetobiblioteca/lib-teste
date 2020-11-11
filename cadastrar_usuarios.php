<?php
session_start();
include_once('conexao.php');
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página Administrativa">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="icon" href="img/icone-biblioteca.ico">
    <title>Área Administrativa</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

</head>

<body>
    <?php
    include_once('menu_admin.php');
    ?>
    <div class="container">
        <h1>Cadastrar Usuário</h1></br>
        <div class="starter-template">
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">CPF:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" name="cpf">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" name="pnome">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Sobrenome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" name="unome">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Matrícula:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" name="matricula">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Senha:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" name="senha">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Tipo de Usuário:</label>
                            <div class="col-sm-10">
                                <select class="form-control">
                                    <option value="1">Administrador</option>
                                    <option value="0">Usuário Comum</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div><!-- /.container -->
    <script src="script/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="script/bootstrap.bundle.min.js"></script>

</html>