<?php
extract($_POST);
$msg = "You got an email enquiry from {$name} {$email}. Please read message below. {$message}";
if (mail("pabankit1922@gmail.com", "Enquiry Form", $msg)) {
    http_response_code(200);
    echo "Message received successfully.. I will touch with you shortly.";
    exit;
} else {
    http_response_code(500);
    echo "Error while processing your request";
    exit;
}
?>