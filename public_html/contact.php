<?php
if ($_POST) {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $enquiry = $_POST['enquiry'] ?? '';
    $message = $_POST['message'] ?? '';

    $to_email = "reachingout@geekinacape.com";
    $subject  = "New Contact Form Enquiry - $enquiry";

    $body  = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Enquiry: " . $enquiry . "\n";
    $body .= "Message:\n" . $message;

    $headers  = "From: reachingout@geekinacape.com\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    if (mail($to_email, $subject, $body, $headers)) {
        echo "Message sent successfully! <a href='index.html'>Go back</a>";
    } else {
        echo "Error sending message.";
    }
}

