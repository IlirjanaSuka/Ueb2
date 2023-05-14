<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $role = $_POST['role'];
    
    if ($role == 'student') {
        header('Location: student.php');
    } else if ($role == 'professor') {
        header('Location: professor.php');
    } else {
        header('Location: home1.php');
    }
    exit;
}
?>
<html>
    <head>
    <link rel="stylesheet" href="signup.css">
    </head>
    <body>
          <nav>
                <a href="#" class="logo">
                    <h1>FindYourWay</h1>
                </a>
                <ul class="menu">
                    <li><a href="home1.php" >Home</a></li>
                    <li><a href="#">Drejtimet</a></li>
                    <li><a href="#">Rreth nesh</a></li>
                    <li><a href="login/login.php">LogIn</a></li>
                    <li><a href="signup.php"class="active">SignUp</a></li>
                </ul>
            </nav>
    <form method="POST" action="" id="registration-form">
    <section class="register-section">
  <h2>SignUp</h2>
  <form action="signup.php" method="post">
    <label for="first-name">First Name:</label>
    <input type="text" id="first-name" name="first_name" required>
    <br>
    <label for="last-name">Last Name:</label>
    <input type="text" id="last-name" name="last_name" required>
    <br>
    <label for="role">Role:</label>
<select id="role" name="role" required>
  <option value="">Select Role</option>
  <option value="Student">Student</option>
  <option value="Professor/Assistant">Professor/Assistant</option>
</select>
<div id="student-id-field" style="display: none;">
  <label for="student-id">Student ID:</label>
  <input type="text" id="student-id" name="student_id">
</div>
<div id="professor-id-field" style="display: none;">
  <label for="professor-id">Professor ID:</label>
  <input type="text" id="professor-id" name="professor_id">
</div>
    
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <label for="confirm-password">Confirm <br>Password:</label>
    <input type="password" id="confirm-password" name="confirm_password" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="confirm-email">Confirm Email:</label>
    <input type="email" id="confirm-email" name="confirm_email" required>
    <br>
    <button type="submit">SignUp</button>
  </form>
</section>
    </form>
        <script src="signup.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="script.js"></script>
    </body>
  <?php
  include 'footer.php';
  ?>
    <script>
$(document).ready(function() {
  $("#role").change(function() {
    if ($(this).val() === "Student") {
      $("#student-id-field").show();
      $("#professor-id-field").hide();
    } else if ($(this).val() === "Professor/Assistant") {
      $("#student-id-field").hide();
      $("#professor-id-field").show();
    } else {
      $("#student-id-field").hide();
      $("#professor-id-field").hide();
    }
  });
});
</script>
</html>
