<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // For demonstration purposes, we'll just print the data. In a real application, you would send an email and store the data in a database.
    echo "Message received!<br>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Message: $message<br>";

    // Send an email (replace 'your@email.com' with your actual email address)
    $to = 'your@email.com';
    $subject = 'New Contact Form Submission';
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    mail($to, $subject, $message, $headers);
}
?>
