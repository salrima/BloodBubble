<?php
session_start();
$receiver = "$_SESSION['email']";
$subject = "Registration Successful";
$body = "Thank you for registering with Blood Bubble";
$sender = "From: Bloodbubble";
if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>