<?php

$visitorName = $_POST['name'];
$visitorEmail = $_POST['email'];
if ($_POST['phone']) {
    $visitorPhone = $_POST['phone'];
} else {
    $visitorPhone = "Not Supplied";
}
$message = $_POST['message'];

$emailFrom = 'clairefl@claire-fleckney.com';
$emailSubject = "New Form Submission";
$emailBody = "New message from $visitorName:" . "\n\n$message\n\n" . "Their email address is: $visitorEmail\n" . "Their phone number is: $visitorPhone";

$to = "claire.e.poulsen@gmail.com";
$headers = "From: $emailFrom \r\n";
$headers .= "Reply-To: $visitorEmail \r\n";

mail($to, $emailSubject, $emailBody, $headers);

header("refresh:0; url='contact.php'");

?>