<?php
    session_start();
    include_once("conexao.php");

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    

    $result_user = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";
    $result_query = pg_query($conexao, $result_user);

    if(mysqli_insert_id($conexao)){
        $_SESSION['msg'] = "<p style='color:green;'>Usuário Cadastrado com sucesso!</p>";
        header("Location: index.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao cadastrar usuário!</p>";
        header("Location: index.php");
    }
