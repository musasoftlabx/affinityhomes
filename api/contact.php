<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $headers = "From : $name" . "\r\n" .
              "Email: $email" . "\r\n" .
              "Subject: $subject" . "\r\n" . "Message: $message";

  if (mail("info@affinityhomes.co.ke", $subject, $message, $headers)) {
    echo "Message sent!";
    header('Location: ../');
  } else {
    echo "Message was not sent!";
  }
?>
