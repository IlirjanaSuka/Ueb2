<?php
include 'connection.php';
session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = $_POST['pass'];
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $role = $_POST['role']; // Get the selected role

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email=? AND password=? AND role=?");
    $select_user->execute([$email, $pass, $role]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if($select_user->rowCount() > 0){
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];

        if($role == 'admin'){
            header('location: admin.php'); // Redirect to admin page
            exit();
        } else {
            header('location: home.php'); // Redirect to regular user page
            exit();
        }
    } else {
        $message[] = 'Incorrect username or password';
    }
}
?>
<style type="text/css">
    <?php include 'style.css' ?>
</style>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>green tea-login now</title>
    </head>
    <body>
        <div class="main-container">
           <section class="form-container">
            <div class="tittle">
                <img src="im.png" >
                <h1>login now</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing. ...</p>
            </div>[]
            <form action="" method="post">
                <div class="input-filed">
                    <p>your email<sup>*</sup></p>
                    <input type="email" name="email" required placeholder="enter your email" maxlength="50"
                     oninput="this.value=this.value.replace(/\s/g, '')" >
                </div>
                <div class="input-filed">
                    <p>your password<sup>*</sup></p>
                    <input type="password" name="pass" required placeholder="enter your password" maxlength="50"
                    oninput="this.value=this.value.replace(/\s/g, '')">
                    <a class="pass" href="forgotpassword.php"><p>Forgot Password?</p></a>
                </div>
                <div class="input-field">
    <p>Select role:</p>
    <select name="role" required class="role-select">
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
</div>
                <input type="submit" name="submit" value="Login" class="btn">
                <p>Do not have an account? <a href="register.php">Register now</a></p>
            </form>
           </section>
        </div>
    </body>
</html>
