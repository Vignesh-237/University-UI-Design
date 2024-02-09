<?php 
$name = $_post['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$email_from = 'vdesigns7627@gmail.com';  /*----domain namein the mail id------*/ 

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message: $message.\n";


$to ="vickysid7627@gmail.com";

$headers = "From: $email_from\r\n";

$headers .= "Replay-to: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>