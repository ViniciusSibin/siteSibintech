<?php

//Função para disparo de e-mails
use PHPMailer\PHPMailer\PHPMailer;
if(!function_exists("enviarEmail")){
    function enviarEmail($destinatario, $assunto, $mensagem){
        require_once ('vendor/autoload.php');

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 3; //Para visualizar o log do e-mail coloque o atributo com o valor 2
        $mail->Host = 'smtp.office365.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->AuthType = 'LOGIN';
        $mail->Username = 'vinisibim@hotmail.com.br';
        $mail->Password = 'Av!n!0306b';

        $mail->SMTPSecure = 'tls';
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('vinisibim@hotmail.com.br', "Formulário de contato sibintech");
        $mail->addAddress("$destinatario");
        $mail->Subject = "$assunto";
        $mail->Body = "$mensagem";

        if($mail->send()){
            return true;
        } else {
            return false;
        }
    }//função para envio de e-mails
}