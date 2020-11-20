<?php
//$result_livro = "SELECT * FROM livros";
$result_livro = "SELECT COUNT(exisbn), id_livros, nome, autor, edicao
                FROM exemplares
                INNER JOIN livros ON isbn = exisbn
                WHERE emprestado = 0
                GROUP BY exisbn, isbn, id_livros";

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
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"
                },
            });
        });
    </script>
</head>

<div class="container">
    <div class="starter-template">
    <div class="title"> 
        <h1>Lista de Livros</h1></br>
    </div>
        <div class="row">
            <div class="col-md-12">
                <table id="listaLivros" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Autor</th>
                            <th>Edição</th>
                            <th>Exemplares Disponíveis</th>
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
                                <td><?php echo $row_livros['count']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#myModal<?php echo $row_livros['id_livros']; ?>">Visualizar</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger">Apagar</button>
                                </td>
                            </tr>
                            <!-- Inicio Modal Visualizar -->
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
                                            <a class="btn btn-outline-success" role="button" data-dismiss="modal" data-toggle="modal" data-target="#modalCadastrarExemplar">Cadastrar Exemplar</a>
                                            <a class="btn btn-outline-info" role="button" data-dismiss="modal" data-toggle="modal" data-target="#modalEditar<?php echo $row_livros['id_livros']; ?>">Editar</a>
                                            <a class="btn btn-outline-danger" role="button" data-dismiss="modal" aria-label="Close">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Modal Visualizar-->

                            <!-- Inicio Modal Editar-->
                            <div class="modal fade" id="modalEditar<?php echo $row_livros['id_livros']; ?>" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Editar livro</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="processa/processa_edt_livro.php">
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Título:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" name="nome" value="<?php echo $row_livros['nome'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ISBN:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword3" name="isbn" value="<?php echo $row_livros['isbn'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Autor:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" name="autor" value="<?php echo $row_livros['autor'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Edição:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword3" name="edicao" value="<?php echo $row_livros['edicao'] ?>">
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Sessão:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword3" name="sessao_id" value="?php echo $row_livros['sessao_id'] ?>">
                                                    </div>
                                                </div> -->
                                                <input type="hidden" name="id_livros" value="<?php echo $row_livros['id_livros']; ?>">
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-outline-success">Salvar</button>
                                                        <button class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close">Cancelar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Fim Modal Editar-->

                            <!-- Inicio Modal Cadastrar Livro-->
                            <div class="modal fade" id="modalCadastrarLivro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center" id="myModalLabel">Cadastrar Livro</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="processa/processa_cad_livro.php">
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" name="id_livro">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Título:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword3" name="nome">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">ISBN:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword3" name="isbn">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Autor:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" name="autor">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Edição:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword3" name="edicao">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Sessão:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" name="sessao_id">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                                                        <button class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close">Cancelar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Modal Cadastrar Livro -->

                            <!-- Inicio Modal Cadastrar Exemplar -->
                            <div class="modal fade" id="modalCadastrarExemplar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center" id="myModalLabel">Cadastrar Exemplar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="processa/processa_cad_exemplar.php">
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Código do Exemplar:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" name="cpf">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Código de Localização:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword3" name="pnome">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">ISBN:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" name="unome">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Localização:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword3" name="matricula">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="emprestado" value="0">
                                                <input type="hidden" name="reservado" value="0">
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                                                        <button class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close">Cancelar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Modal Cadastrar Exemplar-->
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
            <a class="btn btn-lg btn-outline-success" data-toggle="modal" data-target="#modalCadastrarLivro" role="button">Cadastrar Livro</a>
        </div>
    </div>
</div>