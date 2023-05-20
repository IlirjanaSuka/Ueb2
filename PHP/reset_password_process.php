<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Marrja e te dhenave nga forma
    $email = $_POST["email"];
    $resetCode = $_POST["reset_code"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];

  
    if ($newPassword == $confirmPassword) {      
        header("Location: login.php");
        exit();
    }   else {
            header("Location: reset_password_form.php?error=1");
            exit();
        }
    }
