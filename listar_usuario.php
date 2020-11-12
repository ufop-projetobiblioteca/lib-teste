<?php
include_once("conexao.php");

//consultar no banco de dados
$result_usuario = "SELECT * FROM usuarios ORDER BY pnome DESC";
$resultado_usuario = pg_query($conexao, $result_usuario);

//Verificar se encontrou resultado na tabela "usuarios"
if(($resultado_usuario) AND (pg_num_rows($resultado_usuario) != 0)){
	while($row_usuario = pg_fetch_assoc($resultado_usuario)){
		echo $row_usuario['pnome'] . "<br>";
	}
}else{
	echo "Nenhum usuário encontrado";
}