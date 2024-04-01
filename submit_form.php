<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Send email
    $to = "jennlee0701@gmail.com";
    $subject = "New Message from Jenn Lee ";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    // You may need to adjust headers and email settings based on your server configuration
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Message failed to send.";
    }
} else {
    // Redirect or display an error message if accessed directly
    echo "Invalid request.";
}
?>
