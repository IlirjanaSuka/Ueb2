<?php
include 'connection.php';

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    
    <title>Green Coffee-about page</title>
</head>
<body>
    <?php include 'header.php';?>
    <div class="main">
        <div class="banner">
          <h1>About us</h1>
        </div>
        <div class="title2">
         <a href="home.php">home</a><span>about</span>
        </div>
        <div class="about-category">
            <div class="box">
                <img src="3.webp">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="2.webp">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon Teaname</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="about.png">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon Teaname</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="1.webp">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <section class="services">
            <div class="title">
                <img src="download.png" class="logo">
                <h1>why choose us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima facilis nostrum accusantium architecto odit consectetur aut libero quidem facere, ducimus eveniet veritatis deleniti est voluptatem at nesciunt culpa! Quas, illo!</p>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="icon2.png">
                    <div class="detail">
                        <h3>great savings</h3>
                        <p>save big every order</p>
                    </div>
                </div>
                <div class="box">
                    <img src="icon1.png">
                    <div class="detail">
                        <h3>24*7 support</h3>
                        <p>one-on-one support</p>
                    </div>
                </div>
                <div class="box">
                    <img src="icon0.png">
                    <div class="detail">
                        <h3>gift vouchers</h3>
                        <p>vouchers on every festivals</p>
                    </div>
                </div>
                <div class="box">
                    <img src="icon.png">
                    <div class="detail">
                        <h3>worldwide delivery</h3>
                      <p>dropship worldwide</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="about">
          <div class="row">
            <div class="img-box">
            <img src="3.png">
            </div>
            <div class="detail">
                <h1>visit our beautiful showroom!</h1>
                <p>
                    Our showroom is an expression of what we love doing;being creative with floral and plant arrangments.
                    Whether you are looking for a florist for your perfect wedding,or just want to uplift any room with some one of a kind living decor,
                    Blossom with Love can help.
                </p>
                <a href="view-products.php" class="btn">shop now</a>
            </div>
          </div>  
        </div>
        <div class="testimonial-container">
            <div class="title">
                <img src="download.png" class="logo" >
                <h1>What people say about us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, alias error vero quaerat quas hic voluptatum soluta asperiores optio
                 corrupti in voluptas magni accusamus delectus fuga eos perspiciatis rem illo?</p>
              </div>
                 <div class="container">
                <div class="testimonial-item ">
<img src="01.png">
<h1>sara smith</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, excepturi. Temporibus culpa iusto ratione sapiente similique dolor eaque, alias dolorum.
     Explicabo, neque asperiores illo ab et tenetur quam. Ex, aperiam.</p>
                </div>
                <div class="testimonial-item ">
<img src="02.png">
<h1>john smith</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, excepturi. Temporibus culpa iusto ratione sapiente similique dolor eaque, alias dolorum.
     Explicabo, neque asperiores illo ab et tenetur quam. Ex, aperiam.</p>
                </div>
                <div class="testimonial-item ">
<img src="03.png">
<h1>selena ansari</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, excepturi. Temporibus culpa iusto ratione sapiente similique dolor eaque, alias dolorum.
     Explicabo, neque asperiores illo ab et tenetur quam. Ex, aperiam.</p>
                </div>
                <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                <div class="left-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
                </div>
            </div>
        <?php
        include 'footer.php';
        ?>
        </div>
    </div>
</body>
</html>
