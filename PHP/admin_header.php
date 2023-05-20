<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fon-awesome/6.0.0-bets3/css/all.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
       <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link rel="stylesheet"href="style_admin.css">

        <title>Document</title>
    </head>
    <body>
        <header class="header">
            <div class="flex">
                <a href="admin.php"class="logo">Admin<span>Pannel</span></a>
                <nav class="navbar">
                    <a href="admin.php">Home</a>
                    <a href="admin_product.php">products</a>
                    <a href="admin_orders.php">orders</a>
                    <a href="admin_user.php">users</a>
                    <a href="admin_message.php">message</a>
                </nav>
                <div class="icons">
                    <i class="bi bi-list" id="menu-btn"></i>
                    <i class="bx bxs-user" id="user-btn"></i>
                </div>
                <div class="user-box">
                    <p>username : <span><?php //echo $_SESSION['admin_name'];?></span></p>
                    <p>email : <span><?php //echo $_SESSION['admin_email'];?></span></p>
                    <form method="post" class="logout">
                        <button name="logout"class="logout-btn">LOG OUT</button>
                    </form>
                </div>
            </div>
        </header>
        <script>
           const header = document.querySelector('header');
           function fixedNavbar(){
           header.classList.toggle('scroll', window.pageXOffset>0)
          }
          fixedNavbar();
          window.addEventListener('scroll', fixedNavbar);

          let menu=document.querySelector('#menu-btn');
          let userBtn=document.querySelector('#user-btn');

         menu.addEventListener('click', function(){
         let nav =document.querySelector('.navbar');
          nav.classList.toggle('active');
        })
         userBtn.addEventListener('click', function(){
         let userBox =document.querySelector('.user-box');
        userBox.classList.toggle('active');
         })
        </script>
    </body>
</html>