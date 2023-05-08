<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FindYourWay</title>
    <link rel="stylesheet" href="style.css" /> 
    <link rel="stylesheet" href="profesori.css" />
  
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
      
      <div class="button-container">
      <button>Klasat</button>
        <button ><form>
  <label for="class">Burimet:</label>
  <select name="class" id="class" class="select1" onchange="location = this.value;">
    <option value="">Zgjidhni një opsion:</option>
    <option value="https://example.com/matematike">Matematike</option>
    <option value="https://example.com/ueb1">Ueb 1</option>
    <option value="https://example.com/ueb2">Ueb 2</option>
  </select>
</form></button>
        <button ><form>
  <label for="class">Studentet:</label>
  <select name="class" id="class" class="select1" onchange="location = this.value;">
    <option value="">Menagjo studentet:</option>
    <option value="add.php">Shto student</option>
    <option value="delete.php">Fshij student</option>
    <option value="modify.php">Modifiko student</option>
  </select>
</form></button>
      </div>
      
    
    <section class="about2">
  <div class="container1">
    <h2>Pershendetje!</h2>
    <div class="p"><p ><b>Ne kete pjese mund te shtoni vendin ku jeni duke dhene mesim:</b></p></div>
    <button>Shto lokacionin</button>
  </div>
</section>
</section>
    
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>FindYourWay</h4>
            <ul>
              <li><a href="#"><p>Copyright &copy;2023 All rights reserved</p></a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Sherbimet</h4>
            <ul>
              <li><a href="home1.php"><i class="fa fa-home"></i>Home</a></li>
              <li><a href="#"><i class="fa fa-building-columns"></i>Shtojca</a></li>
              <li><a href="keshilla.html"><i class="fa  fa-clone"></i>Këshilla</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Kontakto</h4>
            <ul>
              <li><a href="#"><i class="email">finddyourway@gmail.com</i></a></li>
              <li> <a href="#"><i class="phone"> +38344123456 </i></a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Rrjetet Sociale</h4>
            <ul>
              <li><a href="https://www.facebook.com/profile.php?id=100089359955143"><i class="fa-brands fa-facebook"></i>Facebook</a>
              </li>
              <li><a href="https://www.instagram.com/findyourway544/"> <i class="fa-brands fa-instagram"></i>Instagram</a>
              </li>
              <li><a href="https://twitter.com/?lang=en"><i class="fa-brands fa-twitter"></i>Twitter</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    
  </body>


</html>
