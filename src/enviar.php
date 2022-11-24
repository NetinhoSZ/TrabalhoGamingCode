<?php
    $nome = utf8_encode(($_POST['name']));
    $email = utf8_encode(($_POST['email']));
    $message = utf8_encode(($_POST['message']));

    require '../php-mailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->isSMTP();

    // Configurações do Servidor de e-mail

    $mail->Host = "smtp.gmail.com";
    $mail->Port = "443";
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = "true";
    $mail->Username = "twosurvivorsz2021@gmail.com";
    $mail->Password = "Gamers2022123";
    
    // Configuração de Mensagem

    $mail->setFrom($mail->Username, "Gaming Code");
    $mail->addAddress('twosurvivorsz2021@gmail.com');
    $mail->Subject = "Mande-nos uma Mensagem :)";

    $conteudo_email = "
                        Você recebeu uma mensagem de $nome ($email):
                        <br><br>

                        Mensagem: <br>
                        $message
                      ";

    $mail->isHTML(true);
    $mail->Body = $conteudo_email;

    if($mail->send()) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha no envio! Erro: " .$mail->ErrorInfo;
    }
?>