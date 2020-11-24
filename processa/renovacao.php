<?php
    session_start();
    include_once("../conexao.php");

    $matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_NUMBER_INT);
    $ecodigoexemplar = filter_input(INPUT_POST, 'codExemplar', FILTER_SANITIZE_STRING);
    $novaDataEntrega = filter_input(INPUT_POST,'dataentrega');

    $result_emprestimos = "UPDATE emprestimos SET dataentrega = '$novaDataEntrega' 
                           WHERE ematricula = '$matricula' AND ecodigoexemplar = '$ecodigoexemplar'";
    $result_query = pg_query($conexao, $result_emprestimos);
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
            alert(\"Livro renovado com Sucesso!\");
        </script>
        ";
    }else{
        echo"
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
        https://lib-teste.herokuapp.com/admin.php?link=5'>
        <script type=\"text/javascript\">
            alert(\"Erro ao renovar livro!\");
        </script>
        ";
    }
?>
</body>
</html>
