<?php
    session_start();
    include_once("../conexao.php");

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_EMAIL);
    $pnome = filter_input(INPUT_POST, 'pnome', FILTER_SANITIZE_STRING);
    $unome = filter_input(INPUT_POST, 'unome', FILTER_SANITIZE_STRING);
    $matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    

    $result_user = "UPDATE usuarios SET cpf ='$cpf', tipo_usuario = '$tipo', pnome = '$pnome', unome = '$unome', 
                                        matricula = '$matricula', email = '$email', senha = '$senha' WHERE matricula = '$id'";
    $result_query = pg_query($conexao, $result_user);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
</head>
<body>
<?php
    if($result_query){
        echo"
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
        https://lib-teste.herokuapp.com/1_admin/admin.php?link=2'>
        <script type=\"text/javascript\">
            alert(\"Usuário editado com Sucesso!\");
        </script>
        ";
    }else{
        echo"
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
        https://lib-teste.herokuapp.com/1_admin/admin.php?link=2'>
        <script type=\"text/javascript\">
            alert(\"Erro ao editar usuário!\");
        </script>
        ";
    }
?>
</body>
</html>
