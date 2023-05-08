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
  <label for="student_id">ID e studentit:</label>
  <input type="number" name="student_id" id="student_id">
  <br>
  <input type="submit" name="delete_student" value="Fshij studentin">
</form>
<?php

if (isset($_POST['delete_student'])) {
 
    $conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    

    $student_id = $_POST['student_id'];
    
    $sql = "DELETE FROM students WHERE id = '$student_id'";
    if (mysqli_query($conn, $sql)) {
        echo "Studenti u fshi me sukses.";
    } else {
        echo "Gabim gjate fshirjes se studentit: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>

    </body>
</html>
