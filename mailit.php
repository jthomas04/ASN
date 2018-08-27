<?php

// Set up parameters
$to = "speed3cat@gmail.com";
$subject = "Your password";
$message = "<p>Hello Homer,</p>
<p>Thanks for registering.</p>
<p>Your password is: <b>springfield</b></p>
";
$from = "admin@jon.com";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: $from" . "\r\n";

// Send email
mail($to,$subject,$message,$headers);

// Inform the user
echo "Thanks for registering! We have just sent you an email with your password.";

?>