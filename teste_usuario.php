<?php
$result_usuario = "SELECT * FROM usuarios";
$row_usuario_usuario = pg_query($conexao, $result_usuario);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">

    <!-- MDBootstrap Datatables  -->
    <link href="css/addons/datatables2.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="starter-template">
            <div class="title">
                <h1>Gerência de Usuários</h1></br>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table id="dtBasicExample" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Matrícula</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>E-mail</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row_usuario = pg_fetch_assoc($row_usuario_usuario)) {
                            ?>
                                <tr>
                                    <th><?php echo $row_usuario['matricula']; ?></th>
                                    <td><?php echo $row_usuario['pnome']; ?></td>
                                    <td><?php echo $row_usuario['unome']; ?></td>
                                    <td><?php echo $row_usuario['email']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalVisualizar<?php echo $row_usuario['matricula']; ?>">Visualizar</button>
                                        <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalApagar<?php echo $row_usuario['matricula']; ?>">Apagar</button>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

    <!-- MDBootstrap Datatables  -->
    <script type="text/javascript" src="js/addons/datatables2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>

</body>

</html>