<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST[`name`]) && !empty($_POST['email']) && !empty($_POST[`message`])){
        $name = $_POST[`name`];
        $email = $_POST[`email`];
        $message = $_POST[`message`];
        $header = "From:". $email . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion() . "\r\n";
        
        $msg = "El mensaje es de: ". $name . "\r\n";
        $msg.= "Email: ". $email . "\r\n";
        $msg.= "Su mensaje es: ". $message;
        
        $to = "franker5588@gmail.com";
        $issue = "Mensaje desde mi página";

        $mail = mail($to,$issue, utf8_decode($msg),$header);
        if ($mail) {
            echo "<h4>¡Enviado exitosamente!</h4>";
        }
    }
}