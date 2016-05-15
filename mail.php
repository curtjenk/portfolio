<?php
 // foreach($_POST as $key=>$value) {
 //      echo "<br/>";
 //      echo $key . ' => ' . $value;
 // };
 // die;
      require_once('/usr/share/php/libphp-phpmailer/class.phpmailer.php');

      $mail = new PHPMailer(); // defaults to using php "mail()"
      $body = $_POST['emailBody'];
      $mail->AddReplyTo($_POST['emailAddr'] ,$_POST['name']);
      $mail->SetFrom($_POST['emailAddr'] ,$_POST['name']);
      $address = "curtjenk@comcast.net";
      $mail->AddAddress($address, "Curtis Jenkins");
      $mail->Subject    = $_POST['emailSubject'];
      $mail->MsgHTML($body);

      if(!$mail->Send()) {
            $status='true';
      echo "Mailer Error: " . $mail->ErrorInfo;
      } else {
            $status='false';
      echo "Message sent!";
      }

      // $sendmail($_POST['emailAddr'])
 /*
      Author: Shahid Shaikh
      Blog  : http://codeforgeek.com
    */

    // require_once('class.phpmailer.php');
    // function sendmail($to,$subject,$message,$name)
    // {
    //               $mail             = new PHPMailer();
    //               $body             = $message;
    //               $mail->IsSMTP();
    //               $mail->Host       = "smtp.gmail.com";                  
    //               $mail->SMTPAuth   = true;
    //               $mail->Host       = "smtp.gmail.com";
    //               $mail->Port       = 587;
    //               $mail->Username   = "youraccount@gmail.com";
    //               $mail->Password   = "your gmail password";
    //               $mail->SMTPSecure = 'tls';
    //               $mail->SetFrom('youraccount@gmail.com', 'Your name');
    //               $mail->AddReplyTo("youraccount@gmail.com","Your name");
    //               $mail->Subject    = $subject;
    //               $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
    //               $mail->MsgHTML($body);
    //               $address = $to;
    //               $mail->AddAddress($address, $name);
    //               if(!$mail->Send()) {
    //                   return 0;
    //               } else {
    //                     return 1;
    //               }
    // }

      header('Location: index.php?emailDelivered=' .$status . '#contact');
      
?>