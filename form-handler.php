<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['sbject']
$message = $_POST['message']

$email_form = 'mnakhanafzalcheema1@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User email: $visitor_email.\n".
                "User Name: $subject.\n".
                "User Name: $message.\n".

$to = 'mnakhanafzalcheema1@gmail.com';

$headers = "Form: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contect.html");

?>