<?php
    include('conexao.php');

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $text_contato = $_POST['text_contato'];


    $insertcomentario = "INSERT INTO comentario (nome, email, assunto, descricao)
    VALUES ('$nome', '$email', '$assunto','$text_contato')";

    if (mysqli_query($conn, $insertcomentario)) {
        header('location:../contato.php');
    } else {
        header('location:../404.php');
    }
?>