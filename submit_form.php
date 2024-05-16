php
<?php

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create the email message
$to = 'okuhlecharlieman72@gmail.com';
$subject = 'Contact Form Submission';
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Send the email
mail($to, $subject, $body);

// Display a confirmation message
echo 'Thank you for contacting us. We will get back to you shortly.';

?>
