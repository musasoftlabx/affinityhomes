<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // To send HTML mail, the Content-type header must be set
  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-type: text/html; charset=iso-8859-1';

  // Additional headers
  $headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
  $headers[] = 'From: $name $email';

  if (mail("info@affinityhomes.co.ke", $subject, $message, $headers)) {
    echo "Message sent!";
    header('Location: ../#contact');
  } else {
    echo "Message was not sent!";
  }
?>
