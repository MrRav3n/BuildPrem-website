<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = 'dawidmrraven@gmail.com';
$email_subject = "Uzyskaj wycene - BuildPrem";
$email_body = "Szczegóły wiadomości:\n\nImię i nazwisko: $name\n\nEmail: $email_address\n\nNumer telefonu: $phone\n\nWiadomość:\n$message";
$headers = "biuro@buildprem.com\n";
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
