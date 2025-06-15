<?php
$name =$_POST['name'];
$visitor_email = $_POST['message'];
$Subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';
$email_subject = 'New Form submission';

$email_body = "UserName:$name.\n".
"User Email:$name.\n".

"User email:$visitor_email.\n".

"Subject:$subject.\n".
"user message:$message.\n";

$to = 'avinash6252@gmail.com';
$headers = "Form: $email_form \r\n";
$headers = "Reply to : $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contactus.html");






