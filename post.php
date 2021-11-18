<?php
        $to = "franker5588@gmail.com";

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $header = "From:". $email . "\r\n";
        
        $msg = "Mensaje de: ". $name . "\r\n";
        $msg.= "Email: ". $email . "\r\n";
        $msg.= "Su mensaje es: ". $message;
        
        $issue = "Mensaje desde mi página";

        if(mail($to, $issue, $msg, $header)){
            echo '<script>alert("Correo enviado exitosamente")</script>';
        }else{
            echo '<script>alert("fallo de envio")</script>';
        }

        echo "<script>setTimeOut(.\"location.href='index.html'\",1000)</script>";
?>