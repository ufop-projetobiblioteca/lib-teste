<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilos.css">
        <title>CRUD - Cadastrar</title>

    </head>
    <body>
        <h1>Cadastrar Livros</h1>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form method="POST" action="processa.php">
            <!--<label> id: </label>
            <input type="text" name="id_livro" placeholder="Digite o id do livro"><br><br>-->

            <label> Título: </label>
            <input type="text" name="titulo_livro" placeholder="Digite o título do livro"><br><br>

            <label> ISBN: </label>
            <input type="text" name="isbn_livro" placeholder="Digite o ISBN do livro"><br><br>

            <label> Autor: </label>
            <input type="text" name="autor_livro" placeholder="Digite o autor do livro"><br><br>

            <label> Edição: </label>
            <input type="text" name="edicao_livro" placeholder="Digite a edição do livro"><br><br>

            <label> Sessão: </label>
            <input type="text" name="sessao_livro" placeholder="Digite a sessão do livro"><br><br>

            <input type="submit" value="Cadastrar">
        </form>
    </body>