<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = "
    <html>
    <head>
      <title>Customer Message</title>
    </head>
    <body>
      <p>".$_POST['message']."</p>
    </body>
    </html>
  ";

  // To send HTML mail, the Content-type header must be set
  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-type: text/html; charset=iso-8859-1';

  // Additional headers
  $headers[] = 'To: Affinity Homes info@affinityhomes.co.ke';
  $headers[] = 'From: '.$name.' '.$email;

  if (mail("info@affinityhomes.co.ke", $subject, $message, implode("\r\n", $headers))) {
    echo "Message sent!";
    header('Location: ../#contact');
  } else {
    echo "Message was not sent!";
  }
?>
