<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@your website.com'

$email_subject = 'new form submission'

$email_body = "User name: $name.\n".
               "User email: $visitor_email.\n".
                "Subject: $subject.\n".
                 "User message: $message.\n";

$to ='faysalnuuxfyl@gmail.com';

$headers = "from: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>