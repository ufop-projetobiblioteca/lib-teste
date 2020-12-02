<?php
$result_usuario = "SELECT * FROM usuarios";
$row_usuario_usuario = pg_query($conexao, $result_usuario);
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
            <h1>Lista de Usuários</h1></br>
        </div>
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
                                            <a class="btn btn-outline-warning" role="button" data-dismiss="modal" data-toggle="modal" data-target="#modalEditar<?php echo $row_usuario['matricula']; ?>">Editar</a>
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
                            <div class="modal fade" id="modalEditar<?php echo $row_usuario['matricula']; ?>" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Editar usuário</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="processa/processa_edt_usuario.php">
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">CPF:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" name="cpf" value="<?php echo $row_usuario['cpf'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nome:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword3" name="pnome" value="<?php echo $row_usuario['pnome'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Sobrenome:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" name="unome" value="<?php echo $row_usuario['unome'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Matrícula:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword3" name="matricula" value="<?php echo $row_usuario['matricula'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail:</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="inputEmail3" name="email" value="<?php echo $row_usuario['email'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Senha:</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="inputPassword3" name="senha" value="<?php echo $row_usuario['senha'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tipo de Usuário:</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" name="tipo">
                                                            <option>Selecione</option>
                                                            <option value="1" <?php
                                                                                if ($row_usuario['tipo_usuario'] == 1) {
                                                                                    echo 'selected';
                                                                                }
                                                                                ?>>Administrador</option>
                                                            <option value="0" <?php
                                                                                if ($row_usuario['tipo_usuario'] == 0) {
                                                                                    echo 'selected';
                                                                                }
                                                                                ?>>Aluno</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="id" value="<?php echo $row_usuario['matricula']; ?>">
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

                            <!-- Inicio Modal Cadastrar-->
                            <div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center" id="myModalLabel">Cadastrar Usuário</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="admin.php?link=10">
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">CPF:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" name="cpf">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nome:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword3" name="pnome">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Sobrenome:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputEmail3" name="unome">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Matrícula:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword3" name="matricula">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail:</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="inputEmail3" name="email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Senha:</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="inputPassword3" name="senha">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tipo de Usuário:</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" name="tipo">
                                                            <option selected>Selecione</option>
                                                            <option value="1">Administrador</option>
                                                            <option value="0">Usuário Comum</option>
                                                        </select>
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
                            <!-- Fim Modal Cadastrar-->
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
            <a class="btn btn-lg btn-outline-success" data-toggle="modal" data-target="#modalCadastrar" role="button">Cadastrar Usuário</a>
        </div>
    </div>
</div>