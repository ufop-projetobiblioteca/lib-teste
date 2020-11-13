<?php
session_start();
include_once("conexao.php");
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

    <!-- JQuery library -->
    <script src="js/jquery-3.5.1.js"></script>

    <!-- Datatables CSS library -->
    <link rel="stylesheet" type="text/css" href="css/jquery.datatables.min.css" />

    <!-- Datatables JS library -->
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="script/bootstrap.bundle.min.js"></script>

    

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

    <script src="script/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    <script>
        window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    
    <script type="text/javascript">
        function abrir() {
            document.getElementById('popUp').style.display = 'block';
        }

        function fechar() {
            document.getElementById('popUp').style.display = 'none';
        }
    </script>

</head>

<body>
    <?php
    include_once('menu_admin.php');

    $link = $_GET["link"];

    $pages[1] = "bem_vindo.php";
    $pages[2] = "listar_usuarios.php";
    $pages[3] = "cadastrar_usuario.php";
    $pages[4] = "listar_livros.php";
    $pages[5] = "listar_emprestimos.php";
    $pages[6] = "listar_reservas.php";
    $pages[7] = "editar_usuario.php";
    $pages[8] = "visualizar_usuario.php";


    if (!empty($link)) {
        if (file_exists($pages[$link])) {
            include $pages[$link];
        } else {
            include "bem_vindo.php";
        }
    } else {
        include "bem_vindo.php";
    }
    ?>
</body>
</html>