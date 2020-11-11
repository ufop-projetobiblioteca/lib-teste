<?php
    $matricula = $_GET['id'];

    //consulta
    $usuario = pg_query("SELECT * FROM usuarios WHERE matricula = '$matricula' LIMIT 1");
    $resultado = pg_fetch_assoc($usuario);
?>

<div class="container">
    <h1>Editar Usuário</h1>
    <div class="starter-template">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="processa/processa_edt_usuario.php">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">CPF:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="cpf" value="<?php echo $resultado['cpf'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="pnome" value="<?php echo $resultado['pnome'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Sobrenome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="unome" value="<?php echo $resultado['unome'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Matrícula:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="matricula" value="<?php echo $resultado['matricula'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" name="email" value="<?php echo $resultado['email'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Senha:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" name="senha" value="<?php echo $resultado['senha'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tipo de Usuário:</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="tipo">
                                <option>Selecione</option>
                                <option value="1"
                                <?php
                                    if($resultado['tipo_usuario'] == 1){
                                        echo 'selected';
                                    }
                                ?>
                                >Administrador</option>
                                <option value="0"
                                <?php
                                    if($resultado['tipo_usuario'] == 0){
                                        echo 'selected';
                                    }
                                ?>
                                >Usuário Comum</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $resultado['matricula']; ?>">
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Success</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>