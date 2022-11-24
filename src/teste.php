<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $headers = "From: ".$name;

    $corpoemail = 'Fale Conosco - Gaming Code
                   Nome: '   .$name.'
                   Email:'   .$email.'
                   Assunto:' .$message.' ';

    if(mail("yurirows2015@outlook.com", "Fale Conosco", $corpoemail, $headers)){

        echo "<script>alert('Mensagem enviada com sucesso!');</script>";
        header("Location: index.html");
    } else {
        echo "<script>alert('Erro ao enviar mensagem!');</script>";
    }
?>