<?php

        $name = $_POST[`name`];
        $email = $_POST[`email`];
        $message = $_POST[`message`];
        $header = "From:". $email . "\r\n";
        
        $msg = "Mensaje es de: ". $name . "\r\n";
        $msg.= "Email: ". $email . "\r\n";
        $msg.= "Su mensaje es: ". $message;
        
        $to = "franker5588@gmail.com";
        $issue = "Mensaje desde mi página";

        mail($to, $issue, $msg, $header);
        echo '<script>alert("Correo enviado exitosamente)</script>';
