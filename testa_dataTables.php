<!DOCTYPE html>
<html lang="pt-br">

<?php
include_once("conexao.php");

//consultar no banco de dados
$result_usuario = "SELECT * FROM usuarios"; //ORDER BY matricula DESC LIMIT 10";
$resultado_usuario = pg_query($conexao, $result_usuario);
?>

<head>
    <meta charset="utf-8">

    <!-- Datatables CSS library -->
    <link rel="stylesheet" type="text/css" href="css/jquery.datatables.min.css" />

    <!-- JQuery library -->
    <script src="js/jquery-3.5.1.js"></script>

    <!-- Datatables JS library -->
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>

    <script src="script/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                "pagingType": "full_numbers"
        } );
} );
    </script>
</head>

<div class="container">
    <table id="example" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row_usuario = pg_fetch_assoc($resultado_usuario)) {
            ?>
                <tr>
                    <th><?php echo $row_usuario['matricula']; ?></th>
                    <td><?php echo $row_usuario['pnome']; ?></td>
                    <td><?php echo $row_usuario['unome']; ?></td>
                    <td><?php echo $row_usuario['email']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>