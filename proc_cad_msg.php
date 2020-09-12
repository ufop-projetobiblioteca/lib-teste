<?php
session_start();

include_once 'conexao.php';

// verifica se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$SendCadCont = filter_input(INPUT_POST, 'cadLivro', FILTER_SANITIZE_STRING);

if($SendCadCont){
    // recebe os dados do formulário
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $isbn = filter_input(INPUT_POST, 'isbn', FILTER_SANITIZE_STRING);
    $autor = filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
    $edicao = filter_input(INPUT_POST, 'edicao', FILTER_SANITIZE_STRING);
    $sessao = filter_input(INPUT_POST, 'sessao', FILTER_SANITIZE_STRING);
    

    // insere no BD
    $result_msg_cont = "INSERT INTO livros (id, titulo, isbn, autor, edicao, sessao) VALUES (:id, :titulo, :isbn, :autor, :edicao, :sessao)";
    $insert_msg_cont = $conn->prepare($result_msg_cont);
    $insert_msg_cont->bindParam('id:', $id);
    $insert_msg_cont->bindParam('titulo:', $titulo);
    $insert_msg_cont->bindParam('isbn:', $isbn);
    $insert_msg_cont->bindParam('autor:', $autor);
    $insert_msg_cont->bindParam('edicao:', $edicao);
    $insert_msg_cont->bindParam('sessao:', $sessao);

    if($insert_msg_cont->execute()){
        $_SESSION['msg'] = "<p style='color=green;'>Mensagem enviada com!</p>";
        header('Location: index.php');
    }else{
        $_SESSION['msg'] = "<p style='color=red;'>Falha ao enviar mensagem!</p>";
        header('Location: index.php');
    }

}else{
    $_SESSION['msg'] = "<p style='color=red;'>Falha ao enviar mensagem!</p>";
    header('Location: index.php');
}
?>
