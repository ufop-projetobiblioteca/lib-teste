<?php
    session_start();
    include_once("../conexao.php");

    $matricula = $_GET['id'];
    $result_usuario = "DELETE FROM usuarios WHERE matricula = '$matricula'";
    $resultado_usuario = pg_query($conexao, $result_usuario);

    if($resultado_usuario){
        $_SESSION['msg'] = "<p style='color:green;'> Usuário deletado com sucesso!</p>";
        header("Location: gerenciaUsuarios.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'> Erro ao deletar usuário!</p>";
        header("Location: gerenciaUsuarios.php");
    }
?>