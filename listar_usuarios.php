<?php
$result_usuario = "SELECT * FROM usuarios";
$resultado_usuario = pg_query($conexao, $result_usuario);
?>

<head>
    <meta charset="utf-8">

    <!-- Datatables CSS library -->
    <link rel="stylesheet" type="text/css" href="css/jquery.datatables.min.css" />

    <!-- Datatables CSS library -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- Datatables CSS library -->
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css" />


    <!-- Datatables Bootstrap library -->
    <link rel="stylesheet" type="text/javascript" href="js/dataTables.bootstrap4.min.js" />


    <!-- JQuery library -->
    <script src="js/jquery-3.5.1.js"></script>

    <!-- Datatables JS library -->
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>



    <script>
        $(document).ready(function() {
            $('#listaUsuarios').DataTable({
                "pagingType": "full",

            });
        });
    </script>
</head>

<div role="main" class="container">
    <div class="starter-template">
        <div class="row">
            <div class="col-md-12">
                <table id="listaUsuarios" class="table table-striped table-bordered table-hover">
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
                                <td>
                                    <a class="btn btn-primary btn-sm" href="javascript: abrir();" role="button">Visualizar</a>
                                    <div id="popUp" class="modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Matrícula</p>
                                                    <form method="POST" action="admin.php?link=8&id=<?php echo $linhas['matricula']; ?>">
                                                        <input type="submit" value="Excluir" class="btn btn-danger" role="button">
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <a class="btn btn-primary" href="javascript: fechar();" role="button">Cancelar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->


                                    <a href='admin.php?link=7&id=<?php echo $linhas['matricula']; ?>'>
                                        <button type='button' class='btn btn-warning btn-sm'>Editar</button>
                                    <a href=''>
                                        <button type='button' class='btn btn-danger btn-sm'>Apagar</button>
                                        <button type="button" class="btn btn-outline-primary view_data" id="<?php echo $row_usuario['id']; ?>">Visualizar</button>
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