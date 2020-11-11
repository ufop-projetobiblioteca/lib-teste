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
    $resultado = pg_query("SELECT * FROM usuarios");
    $linhas = pg_num_rows($resultado);
    ?>
    <main role="main" class="container">

        <div class="starter-template">
            <div class="row">
                <div class="col-md-12">
                    <table id="table_id" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Matrícula</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Sobrenome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($linhas = pg_fetch_array($resultado)){
                                    echo "<tr>";
                                        echo "<td>".$linhas['matricula']."</td>";
                                        echo "<td>".$linhas['pnome']."</td>";
                                        echo "<td>".$linhas['unome']."</td>";
                                        echo "<td>".$linhas['email']."</td>";
                                        echo "
                                        <td>
                                        <a href=''>
                                            <button type='button' class='btn btn-warning'>Editar</button>
                                        <a href=''>
                                            <button type='button' class='btn btn-danger'>Apagar</button>
                                        </td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <?php
        if (isset($_SESSION['msg'])) {
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
        ?>
    </main><!-- /.container -->
    <script src="script/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="script/bootstrap.bundle.min.js"></script>

</html>