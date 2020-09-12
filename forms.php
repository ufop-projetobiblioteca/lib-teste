<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Formulário - Livro</title>

    </head>
    <body>
        <h1>Cadastrar Livro</h1>

        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
        ?>
        <form method="POST" action="proc_cad_msg.php">
            <label>id:</label>
            <input type="text" name="id"><br><br>

            <label>Título:</label>
            <input type="text" name="titulo"><br><br>

            <label>ISBN:</label>
            <input type="text" name="isbn"><br><br>

            <label>Autor:</label>
            <input type="text" name="autor"><br><br>

            <label>Edição:</label>
            <input type="text" name="edicao"><br><br>

            <label>Sessão:</label>
            <input type="text" name="sessao"><br><br>

            <input type="submit" name="cadLivro" value="Cadastrar">
        </form>
    </body>
</html>