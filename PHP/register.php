<?php
include 'connection.php';
session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = $_POST['pass'];
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $cpass = $_POST['cpass'];
    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email=?");
    $select_user->execute([$email]);

    if($select_user->rowCount() > 0){
        $message[] = 'Email already exists';
        echo 'Email already exists';
    }else{
        if($pass != $cpass){
            $message[] = 'Confirm your password';
            echo 'Confirm your password';
        }else{
            $insert_user = $conn->prepare("INSERT INTO `users` (name, email, password) VALUES (?, ?, ?)");
            $insert_user->execute([$name, $email, $pass]);

            $select_user = $conn->prepare("SELECT * FROM `users` WHERE email=? AND password=?");
            $select_user->execute([$email, $pass]);
            $row = $select_user->fetch(PDO::FETCH_ASSOC);

            if($select_user->rowCount() > 0){
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $row['email'];
            }
        }
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
        <title>green tea-register now</title>
    </head>
    <body>
        <div class="main-container">
           <section class="form-container">
            <div class="tittle">
                <img src="im.png" >
                <h1>register now</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing. ...</p>
            </div>
            <form action="" method="post">
                <div class="input-filed">
                    <p>your name<sup>*</sup></p>
                    <input type="text" name="name", required placeholder="enter your name" maxlength="50">
                </div>
                <div class="input-filed">
                    <p>your email<sup>*</sup></p>
                    <input type="email" name="email", required placeholder="enter your email" maxlength="50"
                     oninput="this.value=this.value.replace(/\s/g, '')" >
                </div>
                <div class="input-filed">
                    <p>your password<sup>*</sup></p>
                    <input type="password" name="pass", required placeholder="enter your password" maxlength="50"
                    oninput="this.value=this.value.replace(/\s/g, '')">
                </div>
                <div class="input-filed">
                    <p>confirm password<sup>*</sup></p>
                    <input type="password" name="cpass", required placeholder="confirm your password" maxlength="50"
                    oninput="this.value=this.value.replace(/\s/g, '')">
                </div>
                <input type="submit" name="submit" value="register now" class="btn">
                <p>already have an account? <a href="login.php">login now</a></p>
            </form>
           </section>
        </div>
    </body>
</html>
