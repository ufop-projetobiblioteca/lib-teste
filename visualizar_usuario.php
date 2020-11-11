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
                <div class="col">
                    <b>CPF:</b>
                </div>
                <div class="col">
                    <?php echo $resultado['cpf']; ?>
                </div>
                <div class="col">
                    <b>Nome:</b>
                </div>
                <div class="col">
                    <?php echo $resultado['pnome']; ?>
                </div>
                <div class="col">
                    <b>Sobrenome:</b>
                </div>
                <div class="col">
                    <?php echo $resultado['unome']; ?>
                </div>
                <div class="col">
                    <b>Matrícula:</b>
                </div>
                <div class="col">
                    <?php echo $resultado['matricula']; ?>
                </div>
                <div class="col">
                    <b>E-mail:</b>
                </div>
                <div class="col">
                    <?php echo $resultado['email']; ?>
                </div>
                <div class="col">
                    <b>Senha:</b>
                </div>
                <div class="col">
                    <?php echo $resultado['senha']; ?>
                </div>
                <div class="col">
                    <b>Tipo de Usuário:</b>
                </div>
                <div class="col">
                    <?php echo $resultado['tipo_usuario']; ?>
                </div>
            </div>
        </div>
    </div>
</div>