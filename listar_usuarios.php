<?php
$result_usuario = "SELECT * FROM usuarios";
$resultado_usuario = pg_query($conexao, $result_usuario);
?>

<head>
    <meta charset="utf-8">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

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

    <script type="text/javascript">
        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('data-matricula') // Extract info from data-* attributes
            var recipientnome = button.data('data-pnome')
            var recipientdetalhes = button.data('data-unome')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('ID ' + recipient)
            modal.find('#id-curso').val(recipient)
            modal.find('#recipient-name').val(recipientnome)
            modal.find('#detalhes').val(recipientdetalhes)

        })
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
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#myModal<?php echo $row_usuario['matricula']; ?>">Visualizar</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger">Apagar</button>
                                </td>
                            </tr>
                            <!-- Inicio Modal -->
                            <div class="modal fade" id="myModal<?php echo $row_usuario['matricula']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal" data-matricula="<?php echo $row_usuario['matricula']; ?>" data-pnome="<?php echo $row_usuario['pnome']; ?>" data-unome="<?php $row_usuario['unome']; ?>">Editar</button>
                                            <!--<a class="btn btn-outline-warning" href='admin.php?link=7&id=?php echo $row_usuario['matricula']; ?>' role="button">Editar</a> -->
                                            <a class="btn btn-outline-danger" role="button" data-dismiss="modal" aria-label="Close">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Modal -->

                            <!--Início Modal Editar -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Editar Usuário</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="#" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Nome:</label>
                                                    <input name="nome" type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Detalhes:</label>
                                                    <textarea name="detalhes" class="form-control" id="detalhes"></textarea>
                                                </div>
                                                <input name="id" type="hidden" class="form-control" id="id-curso" value="">

                                                <button type="button" class="btn btn-outline-success" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-outline-danger">Alterar</button>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Fim Modal Editar -->
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>