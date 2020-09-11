<?php
    session_start();
    if(!empty($_SESSION['cpf'])){
        echo "Olá, ".$_SESSION['pnome']." Bem-Vindo! <br><br>";
        echo "<a href='logout.php'>Sair<a/>";
    }else{
        $_SESSION['msg'] = "Área restrita!";
        header("Location: index.php");
    }
    
?>