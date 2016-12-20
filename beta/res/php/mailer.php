<?php
// Check for empty fields
if(empty($_POST['to']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['from'], FILTER_VALIDATE_EMAIL)) {
	// Not enough data, do nothing
	return;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'rhydz@msn.com'; // Webmaster email
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";

// TODO: un comment when running on remote server to send mail
//mail($to, $email_subject, $email_body, $headers);

return true;