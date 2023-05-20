<?php
include 'connection.php';

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

if(isset($_GET['token'])){
    $token = $_GET['token'];

    // Check if the token exists in the database and has not expired
    $query = $conn->prepare("SELECT * FROM password_resets WHERE token = ? AND created_at >= DATE_SUB(NOW(), INTERVAL 1 HOUR)");
    $query->execute([$token]);
    $row = $query->fetch(PDO::FETCH_ASSOC);

    if($row){
        // Token is valid, allow the user to reset the password
        if(isset($_POST['submit'])){
            $newPassword = $_POST['new_password'];
            // Update the user's password in the database
            // ...
            echo "Password has been reset successfully!";
        }
    } else {
        echo "Invalid or expired token!";
    }
} else {
    echo "Token not found!";
}

// Rest of the code remains the same
?>
<link rel="stylesheet" href="style.css">
<!-- HTML form -->
<form action="" method="post" class="form-container">
    <input type="password" name="new_password" placeholder="Enter new password" required>
    <input type="submit" name="submit" value="Reset Password">
</form>
