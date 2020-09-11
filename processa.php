<?php
    session_start();
    include_once("conexao.php");

    $id = filter_input(INPUT_POST, 'id_livro', FILTER_SANITIZE_STRING);
    $titulo = filter_input(INPUT_POST, 'titulo_livro', FILTER_SANITIZE_STRING);
    $isbn = filter_input(INPUT_POST, 'isbn_livro', FILTER_SANITIZE_STRING);
    $autor = filter_input(INPUT_POST, 'autor_livro', FILTER_SANITIZE_STRING);
    $edicao = filter_input(INPUT_POST, 'edicao_livro', FILTER_SANITIZE_STRING);
    $sessao = filter_input(INPUT_POST, 'sessao_livro', FILTER_SANITIZE_STRING);
    

    $result_user = "INSERT INTO livros VALUES ('$id', '$titulo', '$isbn', '$autor', '$edicao', '$sessao')";
    $result_query = pg_query($conexao, $result_user);

    if($result_query){
        $_SESSION['msg'] = "<p style='color:green;'>Livro Cadastrado com sucesso!</p>";
        header("Location: index.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao cadastrar livro!</p>";
        header("Location: index.php");
    }
