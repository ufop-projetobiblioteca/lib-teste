<?php
    session_start();
    include_once("../conexao.php");

    $rmatricula = filter_input(INPUT_POST, 'rmatricula', FILTER_SANITIZE_NUMBER_INT);
    $rcodigoexemplar = filter_input(INPUT_POST, 'rcodigoexemplar', FILTER_SANITIZE_STRING);
    $rdata = filter_input(INPUT_POST, 'rdata', FILTER_SANITIZE_STRING);

    $result_user = "INSERT INTO reservas VALUES ('$rmatricula', '$rcodigoexemplar', '$rdata')";
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
        https://lib-teste.herokuapp.com/admin.php?link=6'>
        <script type=\"text/javascript\">
            alert(\"Reserva realizada com Sucesso!\");
        </script>
        ";
    }else{
        echo"
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL =
        https://lib-teste.herokuapp.com/admin.php?link=6'>
        <script type=\"text/javascript\">
            alert(\"Erro ao realizar reserva!\");
        </script>
        ";
    }
?>
</body>
</html>
