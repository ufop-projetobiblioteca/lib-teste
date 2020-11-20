<?php
$result_reservas = "SELECT * FROM reservas";
$resultado_reservas = pg_query($conexao, $result_reservas);
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
            $('#listaReservas').DataTable({
                "pagingType": "full_numbers",
            });
        });
    </script>
</head>

<div class="container">
    <div class="starter-template">
        <div class="row">
            <div class="col-md-12">
                <table id="listaReservas" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Matrícula</th>
                            <th>Código do Exemplar</th>
                            <th>Data da Reserva</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row_reservas = pg_fetch_assoc($resultado_reservas)) {
                        ?>
                            <tr>
                                <th><?php echo $row_reservas['rmatricula']; ?></th>
                                <td><?php echo $row_reservas['rcodigoexemplar']; ?></td>
                                <td><?php echo $row_reservas['rdata']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#myModal<?php echo $row_reservas['rmatricula'];?>">Visualizar</button>
									<button type="button" class="btn btn-sm btn-outline-danger">Apagar</button>
                                </td>
                            </tr>
                            <!-- Inicio Modal -->
								<div class="modal fade" id="myModal<?php echo $row_reservas['rmatricula']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
                                                <h5 class="modal-title text-center" id="myModalLabel">Dados da Reserva</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="modal-body">
                                                <dl class="row">
                                                    <dt class="col-sm-3">Matrícula:</dt>
                                                    <dd class="col-sm-9"><?php echo $row_reservas['rmatricula']; ?></dd>

                                                    <dt class="col-sm-3">Código do Exemplar:</dt>
                                                    <dd class="col-sm-9"><?php echo $row_reservas['rcodigoexemplar']; ?></dd>

                                                    <dt class="col-sm-3">Data da Reserva:</dt>
                                                    <dd class="col-sm-9"><?php echo $row_reservas['rdata']; ?></dd>
                                                </dl>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-outline-success" href='#' role="button">Emprestar</a>
                                                <a class="btn btn-outline-danger" role="button" data-dismiss="modal" aria-label="Close">Cancelar</a>
                                            </div>
										</div>
									</div>
								</div>
								<!-- Fim Modal -->
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <a class="btn btn-lg btn-outline-success" data-toggle="modal" data-target="#modalCadastrar" role="button">Realizar Reserva</a>
        </div>
    </div>
</div>