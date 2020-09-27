<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{

    function  __construct(){
        parent::__construct();
    }

    function send(){


        // Load PHPMailer library
        $this->load->library('Phpmailer_lib');

        // PHPMailer object
        $mail = $this->phpmailer_lib->load();

        // SMTP configuration
          $mail->isSMTP();
          $mail->Host     = 'server.hostimul.org';
          $mail->SMTPAuth = true;
          $mail->Username = 'gmail@chip.az';
          $mail->Password = '@Dir200az@44';
          $mail->SMTPSecure = 'ssl';
          $mail->Port     = 465;

          $mail->setFrom('gmail@chip.az',post('subject'));
          $mail->addReplyTo(post('useremail'),'chip.az');

          // Add a recipient
          $mail->addAddress('chipazerbaijan@gmail.com');

          // Add cc or bcc
          $mail->addCC('cc@chip.az');
          $mail->addBCC('bcc@chip.az');

        // Email subject
        $mail->Subject = 'Chip.az qeyd';

        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
        $mailContent = "<h1>".post('username')."</h1><br>
            <p>".post('comment')."</p>";
        $mail->Body = $mailContent;

        // Send email
        if(!$mail->send()){

            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
          back();
        }
    }

}
