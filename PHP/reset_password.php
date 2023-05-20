<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];


    $resetCode = generateRandomCode(); // Krijoni funksionin tuaj për të gjeneruar një kod të rastësishëm

    $subject = "Rivendosja e fjalëkalimit";
    $message = "Për të rivendosur fjalëkalimin tuaj, shkruani këtë kod: " . $resetCode;
    $headers = "From: webmaster@example.com";
    mail($email, $subject, $message, $headers);

    header("Location: reset_password_form.php");
    exit();
}

function generateRandomCode() {
    $length = 8;
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randomCode = "";

    for ($i = 0; $i < $length; $i++) {
        $randomCode .= $characters[rand(0,     strlen($characters) - 1)];
    }

    return $randomCode;
}
