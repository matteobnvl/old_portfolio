<?php

namespace App\Models;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class Contact {
    public static function sendMail($post){
        $message = $_POST['lastname'] . " " . $post['firstname'] . "\r\n";
                    $message .= "mail :" . $post['email'] . "\r\n";
                    $message .= wordwrap($post['message'],70,"\r\n");
                    $headers = 
                        'From: webmaster@monportfolio.com' . "\r\n" .
                        'Reply-To: contact@portfolio.fr' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
                        
        $mail = new PHPmailer();
        $mail->SetLanguage('fr');
        $mail->IsSMTP();
        $mail->IsHTML(true);
        $mail->SMTPDebug=0;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='ssl';
        $mail->Host='smtp.gmail.com';
        $mail->Port='465';
        $mail->Username='matteobonneval19@gmail.com';
        $mail->Password='lb7072sc';
        $mail->From='contact@portfolio.fr';
        $mail->AddAddress('matteobonneval19@gmail.com');
        $mail->CharSet="utf-8"; 
        $mail->Subject=$_POST['subject'];
        $mail->Body=$message;
        if(!$mail->Send()){ //Teste le return code de la fonction
            $valide ="<script type=\"text/javascript\">alert(\"Un problème est survenue la mail n'a pas été envoyé...Réessayez.\");</script>";
        }
        else{     
            $valide = '<script type="text/javascript">alert("Votre mail a été envoyé avec succés.");</script>';
        }
        $mail->SmtpClose();
        unset($mail);
        return $valide;
    }
}