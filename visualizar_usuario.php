<?php
    $matricula = $_GET['id'];

    //consulta
    $usuario = pg_query("SELECT * FROM usuarios WHERE matricula = '$matricula' LIMIT 1");
    $resultado = pg_fetch_assoc($usuario);
?>

<div class="container">
    <h1>Visualizar Usuário</h1>
    <div class="starter-template">
        <div class="row">
            <div class="col-md-12">
                <div class="col-xs-3 col-sm-1 col-md-1">
                    CPF:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['cpf']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    Nome:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['pnome']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    Sobrenome:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['unome']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    Matrícula:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['matricula']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    E-mail:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['email']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    Senha:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['senha']; ?>
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    Tipo de Usuário:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    <?php echo $resultado['tipo_usuario']; ?>
                </div>
            </div>
        </div>
    </div>
</div>