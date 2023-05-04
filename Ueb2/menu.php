<html>
    <head>
    <link rel="stylesheet" href="menu.css">
    </head>
<body>
<section class="main">
            <nav>
  <a href="#" class="logo">
    <h1>FindYourWay</h1>
  </a>
  <ul class="menu">
    <li><a href="#"<?php if ($currentPage === 'home') { echo ' class="active"'; } ?>>Home</a></li>
    <li><a href="#"<?php if ($currentPage === 'drejtimet') { echo ' class="active"'; } ?>>Drejtimet</a></li>
    <li><a href="#"<?php if ($currentPage === 'login') { echo ' class="active"'; } ?>>LogIn</a></li>
    <li><a href="#"<?php if ($currentPage === 'signup') { echo ' class="active"'; } ?>>SignUp</a></li>
  </ul>
</nav>
</section>
<script src="script.js"></script>
</body>
</html>