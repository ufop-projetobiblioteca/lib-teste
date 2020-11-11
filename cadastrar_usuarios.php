<?php
session_start();
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
    <title>Cadastrar Usuário</title>

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
    <main role="main" class="container">
        <h1>Cadastrar Usuário</h1>

        <div class="starter-template">
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="inputCpf">
                            <label for="inputCpf">CPF</label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="inputNome">
                            <label for="inputNome">Nome</label>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="inputSobrenome">
                            <label for="inputSobrenome">Sobrenome</label>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="inputMatrícula">
                            <label for="inputMatrícula">Matrícula</label>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="inputEmail">
                            <label for="inputEmail">E-mail</label>

                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="inputSenha">
                            <label for="inputSenha">Senha</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>

        </div>

    </main><!-- /.container -->
    <script src="script/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="script/bootstrap.bundle.min.js"></script>

</html>