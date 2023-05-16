<style>
    <?php include 'style.css'?>
</style>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fon-awesome/6.0.0-bets3/css/all.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <title>Green Coffe - contact us</title>
        
    </head>
    <body>
    <?php 
        include 'header.php';
        ?>
    <div class="main">
        <div class="banner">
          <h1>contact us</h1>
        </div>
        <div class="title2">
         <a href="home.php">home</a><span> /contact us</span>
        </div><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <section class="services">
            <div class="box-container">
                <div class="box">
                <img src="img/h.png">
                <div class="detail">
                    <h3>great savings</h3>
                    <p>save big every order</p>
                </div>
                </div>
                <div class="box">
                <img src="img/p.png">
                <div class="detail">
                    <h3>24*7 support</h3>
                    <p>one-on-one support</p>
                </div>
                </div>
                <div class="box">
                <img src="img/o.png">
                <div class="detail">
                    <h3>gift vouchers</h3>
                    <p>vouchers on every festivals</p>
                </div>
                </div>
                <div class="box">
                <img src="img/j.png">
                <div class="detail">
                    <h3>worldwide delivery</h3>
                    <p>dropship worldwide</p>
                </div>
              </div>
            </div>
        </section>
        <div class="form-container">
            <form method="post">
                <div class="title">
                    <img src="img/im.png"class="logo">
                    <h1>leave a message</h1>
                </div>
                <div class="input-field">
                    <p>your email<sup>*</sup></p>
                    <input type="text" name="email">
                </div>
                <div class="input-field">
                    <p>your number<sup>*</sup></p>
                    <input type="text" name="number">
                </div>
                <div class="input-field">
                    <p>your message<sup>*</sup></p>
                    <textarea name="message"></textarea>
                </div>
                <button type="submit" name="submit-btn" class="btn">send message</button>
            </form>
        </div>
        <div class="address">
                <div class="title">
                    <img src="img/im.png"class="logo">
                    <h1>contact detail</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <i class="bx bxs-map-pin"></i>
                        <div>
                            <h4>address</h4>
                            <p>1092 Merigold Lane, Coral Way</p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="bx bxs-phone-call"></i>
                        <div>
                            <h4>phone number</h4>
                            <p>263748297473</p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="bx bxs-map-pin"></i>
                        <div>
                            <h4>email</h4>
                            <p>sdhsye@hrurujr.com</p>
                        </div>
                    </div>
                </div>
            </div>
        <br>
        <br>
        <?php include 'footer.php'; ?>
    </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="script.js"></script>
    
    </body>
</html>
