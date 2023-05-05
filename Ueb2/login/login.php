<?php
$error="";
$success="";
if($_SERVER['REQUEST_METHOD']=='POST'){
$mail=$_POST['mail'];
$pass=$_POST['pass'];

    if($mail=='student'){
      $hash=password_hash('password',PASSWORD_DEFAULT);
      if(password_verify($pass,$hash)){
            $success="Welcome Student!";
            //redirect to another page on successful login
            header("Location:student.php");
        exit;
      }
        else{
            $error="Invalid Password";
            $success="";
        }
    }else{
        $error="Invalid Username";
        $success="";
    }
}

?>


<!DOCTYPE html>
<html lange="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Login</title>
</head>
<body>
    <form method="POST" action="">
    <section>
        <div class="form-box">
            <div class="form-value">
            <form action="">
                <h2>Login</h2>
                <?php if($error):?>
                    <p class="error-message"><?php echo $error;?></p>
                    <?php endif; ?>
                    <?php if ($success): ?>
                        <p class="success-message"><?php echo $success; ?></p>
                    <?php endif; ?>
                <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="mail" required>
                    <label for="">Email</label>
                </div>
                    <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password"  name="pass" required>
                    <label for="">Password</label>
                     </div>
<div class="forget" >
    <label for=""><input type="checkbox">Remember Me</input>
    <a href="#">Forget Password</a></label>
</div>
<button>Log in</button>
<div class="register">
    <p>Don't have a account <a href="signup.php">Register</a>
</div>
</form>
</div>
</div>
</section>
</form>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
