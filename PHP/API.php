<?php

include 'register.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        $id = uniqid();
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $pass = $_POST['pass'];
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);
        $cpass = $_POST['cpass'];
        $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

        // Perform necessary validations
        $errors = array();

        // Validate name
        if (empty($name)) {
            $errors[] = 'Name is required';
        }

        // Validate email
        if (empty($email)) {
            $errors[] = 'Email is required';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email format';
        }

        // Validate password
        if (empty($pass)) {
            $errors[] = 'Password is required';
        } elseif (strlen($pass) < 6) {
            $errors[] = 'Password should be at least 6 characters long';
        }

        // Validate confirm password
        if (empty($cpass)) {
            $errors[] = 'Confirm password is required';
        } elseif ($pass != $cpass) {
            $errors[] = 'Passwords do not match';
        }

        if (!empty($errors)) {
            echo json_encode($errors);
            exit;
        }

        // Check if the email already exists in the database
        $select_user = $conn->prepare("SELECT * FROM `users` WHERE email=?");
        $select_user->execute([$email]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        if ($select_user->rowCount() > 0) {
            $message[] = 'Email already exists';
            echo json_encode($message);
        } else {
            // Insert the user into the database
            $insert_user = $conn->prepare("INSERT INTO `users` (id, name, email, password) VALUES (?, ?, ?, ?)");
            $insert_user->execute([$id, $name, $email, $pass]);

            // Retrieve the newly registered user
            $select_user = $conn->prepare("SELECT * FROM `users` WHERE email=?");
            $select_user->execute([$email]);
            $row = $select_user->fetch(PDO::FETCH_ASSOC);

            if ($select_user->rowCount() > 0) {
                // Set session data
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $row['email'];

                // Set success message
                $message[] = 'Registration successful';

                echo json_encode($message);
            }
        }
    }
}
?>
