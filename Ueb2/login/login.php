<?php
$error="";
$success="";
if($_SERVER['REQUEST_METHOD']=='POST'){
$uname=$_POST['uname'];
$pass=$_POST['pass'];

    if($uname=='student'){
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
        <link rel="stylesheet" href="menu.css">
        <title>Login</title>
</head>
<body>
<nav>
    <a href="#" class="logo">
    <h1>FindYourWay</h1>
  </a>
    <?php
    // Define the menu items
    $menuItems = array(
        array('Home', '#'),
        array('About', '#'),
        array('Courses', '#'),
        array('Teachers', '#'),
        array('Reviews', '#'),
        array('Contact', '#')


    );
    ?>

    <ul>
        <?php
        // Generate the menu items
        foreach ($menuItems as $item) {
            $label = $item[0];
            $url = $item[1];
            echo '<li><a href="' . $url . '">' . $label . '</a></li>';
        }
        ?>
    </ul>
    </nav>

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
                <ion-icon name="person-outline"></ion-icon>
                    <input type="uname" name="uname" required>
                    <label for="">Username</label>
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
    <p>Don't have a account? <a href="signup.php">Register</a>
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
