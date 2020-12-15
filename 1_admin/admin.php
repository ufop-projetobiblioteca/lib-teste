<?php
session_start();
include_once("../conexao.php");
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Victor Dias">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Biblioteca</title>

    <link rel="icon" href="../img/icone-biblioteca.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/">

    <!-- Principal CSS do Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Datatables CSS library -->
    <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css">

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

    <!-- Estilos customizados para esse template -->
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Principal JavaScript do Bootstrap -->
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

<body class="d-flex flex-column h-100">
    <!-- <?php
        include_once('menu_teste.php');

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
        <div id="rodape">
            <footer class="footer bg-light mt-auto navbar-fixed-bottom py-3" id="footer">
                <div class="container-fluid text-center">
                    <div class="row d-flex align-items-center">
                        <div class="col">
                            <a href="https://www.google.com">
                                <img border="0" src="../img/icea.png" class="img-fluid" alt="iceaLogo" width="100" height="100">
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.google.com">
                                <img border="0" src="../img/decsi.png" class="img-fluid" alt="decsiLogo" width="100" height="100">
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.google.com">
                                <img border="0" src="../img/imobilis.png" class="img-fluid" alt="imobilisLogo" width="100" height="100">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright bg-light text-center py-3">
                    <font color="black">© 2020 Copyright:</font>
                    <a href="https://www.google.com"> MDBootstrap.com</a>
                </div>
            </footer>
        </div>
    </div> -->
</body>

</html>