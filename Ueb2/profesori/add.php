<html>
    <head>
    <link rel="stylesheet" href="add_del_mod.css" />
    <link rel="stylesheet" href="profesori.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    </head>
    <body class="body2">
    <section class="main">
      <nav style="background-color:  #124e5ea3;" class="nav3">
        <a href="#" class="logo" class="a2" >
          <h1>FindYourWay</h1>
        </a>
        <ul class="menu" class="ul2">
          <li><a href="home1.php" class="active" class="a2">Home</a></li>
          <li><a class="a2" href="#">Drejtimet</a></li>
          <li><a class="a2" href="signup.php" >LogIn</a></li>
          <li><a class="a2" href="signup.php">SignUp</a></li>
          <li><a class="a2" href="#">Rreth nesh</a></li>
        </ul>
      </nav>
        
    
    <form method="post" class="student-form">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name">
  <br>
  <label for="email">Email:</label>
  <input type="email" name="email" id="email">
  <br>
  <input type="submit" value="Add Student">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    if (empty($name) || empty($email)) {
        echo "Please fill in both name and email fields.";
    } else {
       
        $db_host = 'localhost';
        $db_user = 'username';
        $db_pass = 'password';
        $db_name = 'database_name';
        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
       
        $sql = "INSERT INTO students (name, email) VALUES ('$name', '$email')";
        if (mysqli_query($conn, $sql)) {
            echo "Student added successfully.";
        } else {
            echo "Error adding student: " . mysqli_error($conn);
        }
        
        
        mysqli_close($conn);
    }
}
?>




</body>
</html>





