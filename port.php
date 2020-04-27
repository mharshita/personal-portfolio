<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "manglaharshita@gmail.com";
$subject="Hey";
$mailheader="From: $email \r\n";
mail($recipient , $subject , $formcontent , $mailheader) or die("Error!");
echo "THANK YOU!!";			  
?>