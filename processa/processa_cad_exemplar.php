<?php
    session_start();
    include_once("../conexao.php");

    $codigoexemplar = filter_input(INPUT_POST, 'codigoexemplar', FILTER_SANITIZE_STRING);
    $codlocalizacao = filter_input(INPUT_POST, 'codlocalizacao', FILTER_SANITIZE_STRING);
    $emprestado = filter_input(INPUT_POST, 'emprestado', FILTER_SANITIZE_NUMBER_INT);
    $reservado = filter_input(INPUT_POST, 'reservado', FILTER_SANITIZE_STRING);
    $exisbn = filter_input(INPUT_POST, 'exisbn', FILTER_SANITIZE_NUMBER_INT);
    $exlocalizacao = filter_input(INPUT_POST, 'exlocalizacao', FILTER_SANITIZE_STRING);
    

    $result_user = "INSERT INTO livros VALUES ('$codigoexemplar', '$codlocalizacao', '$emprestado','$reservado', '$exisbn', '$exlocalizacao')";
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
        https://lib-teste.herokuapp.com/admin.php?link=4'>
        <script type=\"text/javascript\">
            alert(\"Exemplar cadastrado com Sucesso!\");
        </script>
        ";
    }else{
        echo"
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
        https://lib-teste.herokuapp.com/admin.php?link=4'>
        <script type=\"text/javascript\">
            alert(\"Erro ao cadastrar exemplar!\");
        </script>
        ";
    }
?>
</body>
</html>
