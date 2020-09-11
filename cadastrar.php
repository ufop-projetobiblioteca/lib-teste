<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilos.css">
        <title>CRUD - Cadastrar</title>

    </head>
    <body>
        <h1>Cadastrar Usuário</h1>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form method="POST" action="processa.php">
            <label> Email: </label>
            <input type="email" name="email" placeholder="Digite o seu email"><br><br>

            <label> Senha: </label>
            <input type="text" name="senha" placeholder="Digite a sua senha"><br><br>

            <input type="submit" value="Cadastrar">
        </form>
    </body>