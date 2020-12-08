<?php
session_start();
include_once("../conexao.php");
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Victor Dias">
    <link rel="icon" href="../img/icone-biblioteca.ico">

    <title>Biblioteca</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Datatables CSS library -->
    <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css" />

    <!-- Custom styles for this template -->
    <link href="../css/starter-template.css" rel="stylesheet">

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

    <!-- Principal JavaScript do Bootstrap -->
    <!-- ================================= -->

    <!-- Foi colocado no final para a página carregar mais rápido -->

    <script src="../js/jquery-3.3.1.slim.min.js"></script>

    <script>
        window.jQuery || document.write('<script src="../js/jquery-slim.min.js"><\/script>')
    </script>

    <script src="../js/jquery.slim.min.js"> </script>

    <!-- JQuery library -->
    <script src="../js/jquery-3.5.1.js"></script>

    <!-- Datatables JS library -->
    <script src="../js/jquery.dataTables.min.js"></script>

    <script src="../js/popper.min.js"></script>

    <script src="../js/bootstrap.min.js"></script>

    <script src="../js/bootstrap.bundle.min.js"></script>

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

    $pages[1] = "../bem_vindo.php";
    $pages[2] = "gerencia_usuarios.php";
    $pages[3] = "gerencia_livros.php";
    $pages[4] = "gerencia_emprestimos.php";
    $pages[5] = "gerencia_reservas.php";

    if (!empty($link)) {
        if (file_exists($pages[$link])) {
            include $pages[$link];
        } else {
            include "../bem_vindo.php";
        }
    } else {
        include "../bem_vindo.php";
    }
    ?>
</body>

<footer class="footer bg-dark mt-auto fixed-bottom py-3">
    <div class="container">
        <p>
            <a href="https://www.google.com">
                <img border="0" alt="W3Schools" src="../img/icea.png" width="100" height="100">
            </a>
        </p>
        <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
    </div>
</footer>

</html>