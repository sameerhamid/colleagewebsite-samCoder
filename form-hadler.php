<?php
$name =$_POST['name'];
$visitor_email =$_POST['email'];
$subject =$_POST['subject'];
$message =$_POST['message'];

$email_from='sam360871@gmail.com';
$email_subject='New Form Submission';
$email_body="User Name: $name.\n".
"User Email: $visitor_email.\n".
"User subject: $subject.\n".
"User message: $message.\n";

$to='sam360871@gmail.com';
$headers="from: $email_from \r\n";

$headers.="Reply-To: $visitor_email";
mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")

?>