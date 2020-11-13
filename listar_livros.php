<?php
$result_livro = "SELECT * FROM livros";
$resultado_livro = pg_query($conexao, $result_livro);
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
            $('#listaLivros').DataTable({
                "pagingType": "full_numbers",
            });
        });
    </script>
</head>

<div role="main" class="container">
    <div class="starter-template">
        <div class="row">
            <div class="col-md-12">
                <table id="listaLivros" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Autor</th>
                            <th>Edição</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row_livros = pg_fetch_assoc($resultado_livro)) {
                        ?>
                            <tr>
                                <th><?php echo $row_livros['id_livros']; ?></th>
                                <td><?php echo $row_livros['nome']; ?></td>
                                <td><?php echo $row_livros['autor']; ?></td>
                                <td><?php echo $row_livros['edicao']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#myModal<?php echo $row_livros['id_livros'];?>">Visualizar</button>
									<button type="button" class="btn btn-sm btn-outline-danger">Apagar</button>
                                </td>
                            </tr>
                            <!-- Inicio Modal -->
								<div class="modal fade" id="myModal<?php echo $row_livros['id_livros']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
                                                <h5 class="modal-title text-center" id="myModalLabel">Dados do Livro</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="modal-body">
                                                <dl class="row">
                                                    <dt class="col-sm-3">ID:</dt>
                                                    <dd class="col-sm-9"><?php echo $row_livros['id_livros']; ?></dd>

                                                    <dt class="col-sm-3">Nome:</dt>
                                                    <dd class="col-sm-9"><?php echo $row_livros['nome']; ?></dd>

                                                    <dt class="col-sm-3">Autor:</dt>
                                                    <dd class="col-sm-9"><?php echo $row_livros['autor']; ?></dd>

                                                    <dt class="col-sm-3">Edicao:</dt>
                                                    <dd class="col-sm-9"><?php echo $row_livros['edicao']; ?></dd>
                                                </dl>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-outline-warning" href='#' role="button">Editar</a>
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