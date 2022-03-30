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

        $mail = mail($to, $issue, $msg, $header);

        if($mail){
            echo 
            "<script>
            alert('Correo enviado exitosamente');
            window.location = './index.html';
            </script>
            ";
        }else{
            echo 
            "<script>
            alert('fallo de envio');
            window.location = './index.html';
            </script>
            ";
        }
?>