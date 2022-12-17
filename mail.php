<?php
$receiver = "cardozoedrichryan@gmail.com";
$subject = "OTP Verification";
$body = "Hi, EDRICH ....This is a test email send from Localhost.";
$sender = "From: Bloodbubble";
if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>