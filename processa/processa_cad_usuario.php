<?php
    session_start();
    include_once("../conexao.php");

    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_EMAIL);
    $pnome = filter_input(INPUT_POST, 'pnome', FILTER_SANITIZE_STRING);
    $unome = filter_input(INPUT_POST, 'unome', FILTER_SANITIZE_STRING);
    $matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    

    $result_user = "INSERT INTO usuarios VALUES ('$cpf', '$tipo', '$pnome','$unome', '$matricula', '$email', '$senha')";
    $result_query = pg_query($conexao, $result_user);

    if($result_query){
        $_SESSION['msg'] = "<p style='color:green;'>Usuário Cadastrado com sucesso!</p>";
        header("Location: ../listar_usuarios.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao cadastrar usuário!</p>";
        header("Location: ../listar_usuarios.php");
    }