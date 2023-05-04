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
<?php
  $currentPage = 'signup';
  include 'menu.php';
?>
<html>
    <head>
    <link rel="stylesheet" href="signup.css">
    </head>
    <body>
    <form method="POST" action="" id="registration-form">
    <div class="form-section" id="section-role">
  <label for="role" class="roli">Roli</label>
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="role-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Zgjidhni rolin
    </button>
    <div class="dropdown-menu" aria-labelledby="role-button">
      <a class="dropdown-item" href="#" data-value="student">Student</a>
      <a class="dropdown-item" href="#" data-value="profesor">Profesor/Asistent</a>
    </div>
  </div>
  <br>
  <button type="button" class="next-section-button">Next</button>
</div>

  <div class="form-section" id="section-name">
    <label for="name">Emri:</label>
    <input type="text" name="name" id="name" required>
    <br>

    <label for="surname">Mbiemri:</label>
    <input type="text" name="surname" id="surname" required>
    <br>
    <button type="button" class="previous-section-button">Kthehu</button>
    <button type="button" class="next-section-button">Next</button>
  </div>
  <div class="form-section" id="section-username-password">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br>

    <button type="button" class="previous-section-button">Kthehu</button>
    <button type="submit">Regjistrohu</button>
  </div>
</form>
        <script src="signup.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>