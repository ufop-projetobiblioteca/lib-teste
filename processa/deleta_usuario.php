<?php
    session_start();
    include_once("../conexao.php");

    $matricula = $_GET['id'];
    $result_usuario = "DELETE FROM usuarios WHERE matricula = '$matricula'";
    $resultado_usuario = pg_query($conexao, $result_usuario);

    if($resultado_usuario){
        echo"
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
        https://lib-teste.herokuapp.com/1_admin/admin.php?link=2'>
        <script type=\"text/javascript\">
            alert(\"Usuário deletado com Sucesso!\");
        </script>
        ";
    }else{
        echo"
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
        https://lib-teste.herokuapp.com/1_admin/admin.php?link=2'>
        <script type=\"text/javascript\">
            alert(\"Erro ao deletar usuário!\");
        </script>
        ";
    }
?>