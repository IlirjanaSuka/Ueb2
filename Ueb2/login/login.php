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

    <form method="POST" action="login_check.php">
    <section>
        <div class="form-box">
            <div class="form-value">
            <form action="">
                <h2>Login
                <h4>
        <?php
        error_reporting(0);
        session_start();
        session_destroy();
        echo $_SESSION['loginMessage'];
        ?>
    </h4>  
                </h2>
                <div class="inputbox">
                <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="username" required>
                    <label for="">Username</label>
                </div>
                    <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password"  name="password" required>
                    <label for="">Password</label>
                     </div>
<div class="forget" >
    <label for=""><input type="checkbox">Remember Me!</input>
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
