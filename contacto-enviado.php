<?php
        if(isset ($_POST['submit'])){
            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                $header = "From: juanarosa@gmail.com" . "\r\n";
                $header. = "Reply-to: doñabegoña@gmail.com" . "\r\n";
                $header.= "X-mailer: PHP/". phpversion();

                $mail = @mail($email,$message,$header);

                if($mail){
                    echo "<h4>Mail enviado exitosamente.</h4>"
                }
            }
        }
?>