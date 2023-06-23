<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['text'];
    $subject = "Contact Form Submission";

    $to = "fiercesamsonchi@gmail.com";
    $headers = "From: $name <$email>";
    $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message. We will contact you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
