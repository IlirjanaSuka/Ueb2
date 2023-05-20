<?php
include 'connection.php';

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    // Validate the email address and check if it exists in the database
    // ...
    // Generate a unique token
    $token = bin2hex(random_bytes(32));

    // Store the token, email, and timestamp in the database
    $query = $conn->prepare("INSERT INTO password_resets (email, token, created_at) VALUES (?, ?, NOW())");
    $query->execute([$email, $token]);

    // Send the password reset email with the token
    $resetLink = "http://example.com/reset_password.php?token=$token";
    // ... Code to send the email
    // ...
    echo "Password reset email sent!";
}

// Rest of the code remains the same
?>
<!-- HTML form -->
<link rel="stylesheet" href="style.css">
<form action="" method="post" class="form-container">
    <input type="email" name="email" placeholder="Enter your email" required>
    <input type="submit" name="submit" value="Reset Password">
</form>
