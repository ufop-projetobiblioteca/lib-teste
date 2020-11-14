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
                "pagingType": "full_numbers",
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
                            <th>Ações</th>
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
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalVisualizar<?php echo $row_usuario['matricula']; ?>">Visualizar</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modalApagar<?php echo $row_usuario['matricula']; ?>">Apagar</button>
                                </td>
                            </tr>
                            <!-- Inicio Modal Visualizar-->
                            <div class="modal fade" id="modalVisualizar<?php echo $row_usuario['matricula']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center" id="myModalLabel">Dados do Usuário</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <dl class="row">
                                                <dt class="col-sm-3">Matrícula:</dt>
                                                <dd class="col-sm-9"><?php echo $row_usuario['matricula']; ?></dd>

                                                <dt class="col-sm-3">Nome:</dt>
                                                <dd class="col-sm-9"><?php echo $row_usuario['pnome']; ?></dd>

                                                <dt class="col-sm-3">Sobrenome:</dt>
                                                <dd class="col-sm-9"><?php echo $row_usuario['unome']; ?></dd>

                                                <dt class="col-sm-3">E-mail:</dt>
                                                <dd class="col-sm-9"><?php echo $row_usuario['email']; ?></dd>
                                            </dl>
                                        </div>
                                        <div class="modal-footer">
                                            <!--<a class="btn btn-outline-warning" href='admin.php?link=7&id=<php echo $row_usuario['matricula']; ?>' role="button">Editar</a>-->
                                            <a class="btn btn-outline-warning" role="button" data-toggle="modal" aria-label="Close" data-target="modalEditar">Editar</a>
                                            <a class="btn btn-outline-danger" role="button" data-dismiss="modal" aria-label="Close">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Modal Visualizar-->

                            <!-- Inicio Modal Apagar-->
                            <div class="modal fade" id="modalApagar<?php echo $row_usuario['matricula']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center" id="myModalLabel">Deletar Usuário</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <blockquote class="blockquote">
                                                <p class="mb-0">Tem certeza que deseja excluir '<?php echo $row_usuario['pnome']; ?>' do seu Banco de Dados?</p>
                                            </blockquote>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-outline-danger" href='admin.php?link=9&id=<?php echo $row_usuario['matricula']; ?>' role="button">Excluir</a>
                                            <a class="btn btn-outline-primary" role="button" data-dismiss="modal" aria-label="Close">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Modal Apagar-->

                            <!-- Inicio Modal Editar-->
                            <div class="modal" id="modalEditar" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Editar usuário</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span>&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                        
                                        </div>

                                        <div class="modal-footer">
                                            <a class="btn btn-outline-success" href='#' role="button">Confirmar</a>
                                            <a class="btn btn-outline-danger" role="button" data-dismiss="modal" aria-label="Close">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                            <!-- Fim Modal Editar-->
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="float-right">
                    <a class="btn btn-lg btn-outline-success" href="admin.php?link=3" role="button">Cadastrar Usuário</a>
                </div>
            </div>
        </div>
    </div>
</div>