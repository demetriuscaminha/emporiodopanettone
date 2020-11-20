<?php
    //1 – Definimos Para quem vai ser enviado o email
    $para = "demetriuscaminha@gmail.com";

    $fullname = $_POST['fullname'];
    $datanasc = $_POST['datanasc'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    $mensagem = "<strong>Nome Completo:  </strong>".$nome;
    $mensagem .= "<br>  <strong>Mensagem: </strong>"
    .$_POST['mensagem'];

    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  dominio.com.br<contato@emporiodopanettoneam.com.br>\n";

    $headers .= "X-Sender:  <contato@emporiodopanettoneam.com.br>\n";
    //email do servidor //que enviou
    $headers .= "X-Mailer: PHP  v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path:  <contato@emporiodopanettoneam.com.br>\n";
    //caso a msg //seja respondida vai para  este email.
    $headers .= "MIME-Version: 1.0\n";

    mail($para, $fullname, $datanasc, $email, $celular, $headers);  //função que faz o envio do email.
?>