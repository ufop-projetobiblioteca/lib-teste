<?php
if(isset($_POST["user_id"])){
	include_once "conexao.php";
	
	$resultado = '';
	
	$query_user = "SELECT * FROM usuarios WHERE matricula = '" . $_POST["user_id"] . "' LIMIT 1";
	$resultado_user = pg_query($conexao, $query_user);
	$row_user = pg_fetch_assoc($resultado_user);
	
	$resultado .= '<dl class="row">';
	
	$resultado .= '<dt class="col-sm-3">ID</dt>';
	$resultado .= '<dd class="col-sm-9">'.$row_user['matricula'].'</dd>';
	
	$resultado .= '<dt class="col-sm-3">Nome</dt>';
	$resultado .= '<dd class="col-sm-9">'.$row_user['pnome'].'</dd>';
	
	$resultado .= '<dt class="col-sm-3">E-mail</dt>';
	$resultado .= '<dd class="col-sm-9">'.$row_user['unome'].'</dd>';
		
	$resultado .= '</dl>';
	
	echo $resultado;
}
?>
<!-- ?php
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
        <div class="pull-rigth">
            <a href="admin.php?link=2"><button type="button" class="btn btn-sm btn-primary">Listar</button></a>
            <a href='admin.php?link=7&id=<?php echo $resultado['matricula']; ?>'><button type="button" class="btn btn-sm btn-warning">Editar</button></a>
            <a href="#"><button type="button" class="btn btn-sm btn-danger">Apagar</button></a>
        </div>
    </div>
</div> -->