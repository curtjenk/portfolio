<?php
      require_once('/usr/share/php/libphp-phpmailer/class.phpmailer.php');
      $mail = new PHPMailer(); // defaults to using php "mail()"
      $body = 'this is an email';
      $mail->AddReplyTo("keithm.2@gmail.com","Keith Moore");
      $mail->SetFrom('keithm.2@gmail.com', 'From Keith Moore');
      $address = "keithm.2@gmail.com";
      $mail->AddAddress($address, "Keith Moore");
      $mail->Subject    = "PHPMailer Test Subject via mail(), basic";
      $mail->MsgHTML($body);
      if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
      } else {
      echo "Message sent!";
      }
?>