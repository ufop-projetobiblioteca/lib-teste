<?php
$matricula = $_GET['id'];

//consulta
$usuario = pg_query("SELECT * FROM usuarios WHERE matricula = '$matricula' LIMIT 1");
$resultado = pg_fetch_assoc($usuario);
?>

<div class="float-right">
    <a class="btn btn-primary" href="admin.php?link=3" role="button">Cadastrar Usuário</a>
    <a class="btn btn-danger" href="javascript: abrir();" role="button">Deletar Usuário</a>
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
                    <!-- <p>Matrícula</p>
                    <form method="POST" action="processaDeletarUsuario.php">
                        <p><input type="text" name="matricula">
                            <p><input type="submit" value="Excluir" class="btn btn-danger" role="button"></p>
                    </form> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-xs-3 col-sm-1 col-md-1">
                                <b>CPF:</b>
                            </div>
                            <div class="col-xs-9 col-sm-11 col-md-11">
                                <?php echo $resultado['cpf']; ?>
                            </div>
                            <div class="col-xs-3 col-sm-1 col-md-1">
                                <b>Nome:</b>
                            </div>
                            <div class="col-xs-9 col-sm-11 col-md-11">
                                <?php echo $resultado['pnome']; ?>
                            </div>
                            <div class="col-xs-3 col-sm-1 col-md-1">
                                <b>Sobrenome:</b>
                            </div>
                            <div class="col-xs-9 col-sm-11 col-md-11">
                                <?php echo $resultado['unome']; ?>
                            </div>
                            <div class="col-xs-3 col-sm-1 col-md-1">
                                <b>Matrícula:</b>
                            </div>
                            <div class="col-xs-9 col-sm-11 col-md-11">
                                <?php echo $resultado['matricula']; ?>
                            </div>
                            <div class="col-xs-3 col-sm-1 col-md-1">
                                <b>E-mail:</b>
                            </div>
                            <div class="col-xs-9 col-sm-11 col-md-11">
                                <?php echo $resultado['email']; ?>
                            </div>
                            <div class="col-xs-3 col-sm-1 col-md-1">
                                <b>Senha:</b>
                            </div>
                            <div class="col-xs-9 col-sm-11 col-md-11">
                                <?php echo $resultado['senha']; ?>
                            </div>
                            <div class="col-xs-3 col-sm-1 col-md-1">
                                <b>Tipo de Usuário:</b>
                            </div>
                            <div class="col-xs-9 col-sm-11 col-md-11">
                                <?php echo $resultado['tipo_usuario']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="javascript: fechar();" role="button">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h1>Visualizar Usuário</h1>
    <div class="starter-template">

        <div class="pull-rigth">
            <a href="admin.php?link=2"><button type="button" class="btn btn-sm btn-primary">Listar</button></a>
            <a href='admin.php?link=7&id=<?php echo $resultado['matricula']; ?>'><button type="button" class="btn btn-sm btn-warning">Editar</button></a>
            <a href="#"><button type="button" class="btn btn-sm btn-danger">Apagar</button></a>
        </div>
    </div>
</div>