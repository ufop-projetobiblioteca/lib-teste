<?php
if(isset($_POST["user_id"])){
	include_once "conexao.php";
	
	$resultado = '';
	
	$query_user = "SELECT * FROM usuarios WHERE id = '" . $_POST["user_id"] . "' LIMIT 1";
	$resultado_user = pg_query($conexao, $query_user);
	$row_user = pg_fetch_assoc($resultado_user);
	
	$resultado .= '<dl class="row">';
	
	$resultado .= '<dt class="col-sm-3">Matricula</dt>';
	$resultado .= '<dd class="col-sm-9">'.$row_user['matricula'].'</dd>';
	
	$resultado .= '<dt class="col-sm-3">Nome</dt>';
	$resultado .= '<dd class="col-sm-9">'.$row_user['pnome'].'</dd>';
	
	$resultado .= '<dt class="col-sm-3">E-mail</dt>';
	$resultado .= '<dd class="col-sm-9">'.$row_user['email'].'</dd>';
		
	$resultado .= '</dl>';
	
	echo $resultado;
}