<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $sub     = htmlspecialchars($_POST['sub']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "atulinspn@gmail.com"; // Replace with your email
    $subject = "New Contact Form Message";
    $body    = "Name: $name\nEmail: $email\nSubject: $sub\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again.";
    }
}
?>
