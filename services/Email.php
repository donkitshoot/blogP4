<?php

class Email
{

    private $categoryManager;
    private $view;

    public function __construct()
    {
        $this->email();
    }

    private function email()
    {
        $to = 'munch.marsterr@gmail.com';
        $name = $_POST["name"];
        $email= $_POST["email"];
        $text= $_POST["message"];
        
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $message =' <table style="width:100%">
                        <tr>
                            <td>'.$name.'</td>
                        </tr>
                        <tr><td>Email: '.$email.'</td></tr>
                        <tr><td>Text: '.$text.'</td></tr>
            
                    </table>';

        if (@mail($to, $email, $message, $headers)) {
            $success = true;
            $feedback = 'Votre message a bien été envoyé.';
        } else {
            $success = false;
            $feedback = 'Échec de l\'envoi.';
        }
        
    }
}