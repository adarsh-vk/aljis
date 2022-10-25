<?php
//get data from form  
$name = $_POST['pname'];
$email= $_POST['pmail'];
$message= $_POST['pmes'];
$to = "adarshvk2315@gail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>