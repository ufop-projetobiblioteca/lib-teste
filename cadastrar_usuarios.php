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
    <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
            <div class="form-inner">
                <form method="POST" action="processaUsuario.php" class="text-left form-validate">
                    <div class="form-group-material">
                        <input id="register-username" type="text" name="registerCPF" required data-msg="Please enter your username" class="input-material">
                        <label for="register-username" class="label-material">CPF:</label>
                    </div>
                    <div class="form-group-material">
                        <input id="register-username" type="text" name="registerType" required data-msg="Please enter your username" class="input-material">
                        <label for="register-username" class="label-material">Tipo de Usuário:</label>
                    </div>
                    <div class="form-group-material">
                        <input id="register-username" type="text" name="registerPName" required data-msg="Please enter your username" class="input-material">
                        <label for="register-username" class="label-material">Nome:</label>
                    </div>
                    <div class="form-group-material">
                        <input id="register-username" type="text" name="registerUName" required data-msg="Please enter your username" class="input-material">
                        <label for="register-username" class="label-material">Sobrenome:</label>
                    </div>
                    <div class="form-group-material">
                        <input id="register-username" type="text" name="registerMatricula" required data-msg="Please enter your username" class="input-material">
                        <label for="register-username" class="label-material">Matrícula:</label>
                    </div>
                    <div class="form-group-material">
                        <input id="register-email" type="email" name="registerEmail" required data-msg="Please enter a valid email address" class="input-material">
                        <label for="register-email" class="label-material">Email: </label>
                    </div>
                    <div class="form-group-material">
                        <input id="register-password" type="text" name="registerPassword" required data-msg="Please enter your password" class="input-material">
                        <label for="register-password" class="label-material">Senha: </label>
                    </div>
                    <div class="form-group terms-conditions text-center">
                        <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="form-control-custom">
                        <label for="register-agree">Eu concordo com a política de termos</label>
                    </div>
                    <div class="form-group text-center">
                        <input id="register" type="submit" value="Cadastrar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>>

    </main><!-- /.container -->
    <script src="script/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="script/bootstrap.bundle.min.js"></script>

</html>