<?php
    session_start();
    include_once("../conexao.php");

    $ematricula = filter_input(INPUT_POST, 'ematricula', FILTER_SANITIZE_NUMBER_INT);
    $ecodigoexemplar = filter_input(INPUT_POST, 'ecodigoexemplar', FILTER_SANITIZE_STRING);
    $dataemprestimo = $_POST('dataemprestimo');
    $dataentrega = $_POST('dataentrega');

    $result_user = "INSERT INTO emprestimos VALUES ('$ematricula', '$ecodigoexemplar', '$dataemprestimo','$dataentrega')";
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
        https://lib-teste.herokuapp.com/admin.php?link=5'>
        <script type=\"text/javascript\">
            alert(\"Empréstimo realizado com Sucesso!\");
        </script>
        ";
    }else{
        echo"
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
        https://lib-teste.herokuapp.com/admin.php?link=5'>
        <script type=\"text/javascript\">
            alert(\"Erro ao realizar empréstimo!\");
        </script>
        ";
    }
?>
</body>
</html>
