<?php
 // foreach($_POST as $key=>$value) {
 //      echo "<br/>";
 //      echo $key . ' => ' . $value;
 // };
 // die;
      // require_once('/usr/share/php/libphp-phpmailer/class.phpmailer.php');
      // $mail = new PHPMailer(); // defaults to using php "mail()"
      // $body = $_POST['emalBody'];
      // $mail->AddReplyTo("curtjenk@comcast.net","Curtis Jenkins");
      // $mail->SetFrom('curtjenk@comcast.net', 'From Curtis Jenkins');
      // $address = $_POST['emailAddr'];
      // $mail->AddAddress($address, $_POST['firstName']. ' ' . $_POST['lastName']);
      // $mail->Subject    = $_POST['emailSubject'];
      // $mail->MsgHTML($body);
      // if(!$mail->Send()) {
      // echo "Mailer Error: " . $mail->ErrorInfo;
      // } else {
      // echo "Message sent!";
      // }

      header('Location: index.php?emailDelivered=true#contact');
?>