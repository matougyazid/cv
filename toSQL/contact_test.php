<?php
$name = $_POST['visitor_name'];
$email = $_POST['visitor_email'];
$message = $_POST['visitor_message'];
$formcontent=" From: $name \n Message: $message";
$recipient = "matougyazid725@gmail.com";
$subject = $_POST['email_title'];
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>