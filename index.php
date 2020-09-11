<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilos.css">
        <title>Biblioteca - Login</title>

    </head>
    <body>
            <h2>Faça login para continuar</h2>
            <?php
                if(isset($_SESSION['msg']))
                {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
            <form method="POST" action="valida.php">
                <label>Usuário: </label>
                <input type="text" name="usuario" placeholder="Digite o seu usuário"><br><br>

                <label>Senha: </label>
                <input type="text" name="senha" placeholder="Digite a sua senha"><br><br>

                <input type="submit" name="btnLogin" value="Fazer login"> 
            </form>

            <form method="POST" action="cadastrar.php">
                <input type="submit" name="btnCadastro" value="Cadastrar" href="cadastrar.php">
            </form>

                
    </body>
</html>