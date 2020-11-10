<?php
session_start();
include_once("conexao.php"); {
    $usuario = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'inputPassword', FILTER_SANITIZE_STRING);

    if ((!empty($usuario)) and (!empty($senha))) {
        //pesquisar usuário no BD
        $result_usuario = "SELECT * FROM usuarios WHERE email='$usuario' and senha='$senha'";
        $resultado_usuario = pg_query($conexao, $result_usuario);

        if ($resultado_usuario) {
            $row_usuario = pg_fetch_assoc($resultado_usuario);
            if ($row_usuario['tipo_usuario'] == 1) {
                header("Location: admin.php");
            } else if ($row_usuario['tipo_usuario'] == 0) {
                header("Location: usuario.php");
            }
        } else {
            $_SESSION['msg'] = "Usuário ou senha incorretos!";
            header("Location: index.php");
        }
    }
}
