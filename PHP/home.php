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
  <script>
  $(document).ready(function() {
    var cookieBar = document.getElementById("cookieBar");
    var yesAgreeBtn = document.querySelector(".yesiagree");
    var noAgreeBtn = document.querySelector(".noiagre");

    // Function to hide the cookie bar
    function hideCookieBar() {
      if (cookieBar) {
        cookieBar.style.display = "none";
      }
    }

    // Function to show the cookie bar
    function showCookieBar() {
      if (cookieBar) {
        cookieBar.style.display = "block";
      }
    }

    // Check if the user has already agreed to the cookies
    if (getCookie('home_cookie_bar')) {
      hideCookieBar();
    }

    // Event listener for "Yes, I agree" button
    if (yesAgreeBtn) {
      yesAgreeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        document.cookie = "home_cookie_bar=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
        hideCookieBar();
      });
    }

    // Event listener for "No, I don't agree" button
    if (noAgreeBtn) {
      noAgreeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        document.cookie = "home_cookie_bar=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        hideCookieBar();
      });
    }
  });
  
  // Function to get cookie value by name
  function getCookie(name) {
    var cookieArr = document.cookie.split(";");

    for (var i = 0; i < cookieArr.length; i++) {
      var cookiePair = cookieArr[i].split("=");

      if (name === cookiePair[0].trim()) {
        return decodeURIComponent(cookiePair[1]);
      }
    }

    return null;
  }
</script>
        <title>Green Coffe - home page</title>
        
    </head>
    <body>
    <?php 
        include 'header.php';
        ?>
        <div class="main">
          <section class="home-section">
        <div class="slider">
            <div class="slider__slider slide1">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nihil consequuntur repellendus error. Id rerum ipsa molestiae minima odio sint maiores in modi sequi. <br>Velit quaerat iste praesentium quia nobis!</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!------->
            <div class="slider__slider slide2">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Welcom to my shop</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nihil consequuntur repellendus error. Id rerum ipsa molestiae minima odio sint maiores in modi sequi.<br> Velit quaerat iste praesentium quia nobis!</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!------->
            <div class="slider__slider slide3">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nihil consequuntur repellendus error. Id rerum ipsa molestiae minima odio sint maiores in modi sequi.<br> Velit quaerat iste praesentium quia nobis!</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!------->
            <div class="slider__slider slide4">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nihil consequuntur repellendus error. Id rerum ipsa molestiae minima odio sint maiores in modi sequi.<br> Velit quaerat iste praesentium quia nobis!</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!------->
            <div class="slider__slider slide5">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem ipsum dolor sit</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nihil consequuntur repellendus error. Id rerum ipsa molestiae minima odio sint maiores in modi sequi.<br> Velit quaerat iste praesentium quia nobis!</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!------->
            <div class="left-arrow"><i class="bx bx-left-arrow"></i></div>
            <div class="right-arrow"><i class="bx bx-right-arrow"></i></div>
            <!-- Cookie bar section -->
             <div id="cookieBar" class="popup">
               <div class="popup-content">
                <span>We use cookies on this site to enhance your experience.</span>
                <abbr>By clicking any link on this website, you are giving us consent for us to set cookies</abbr>
                <div class="btnWrap">
                   <a href="#" class="btn3 yesiagree">Yes, I agree</a>
                   <a href="#" class="btn3 noiagre">No, I don't agree</a>
                </div>
               </div>
             </div>
         </div>
        <!------->
        </section>
        <section class="thumb">
            <div class="box-container">
                <div class="box">
                    <img src="42.png ">
                    <h3>green tea</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="892.png">
                    <h3>lemon tea</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="385.png ">
                    <h3>green coffee</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="43.png">
                    <h3>black coffee</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <i class="bx bx-chevron-right"></i>
                </div>
            </div>

        </section>
        <section class="container">
  <div class="box-container">
    <div class="box">
      <div class="text-container">
        <span>healthy tea</span>
        <h1>save up to 50% off</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, voluptatibus iste voluptate, sint doloremque corrupti sed rerum sunt illo accusantium iusto quo nulla quis et nostrum exercitationem nihil adipisci alias.</p>
      </div>
      <img src="ave.png">
    </div>
  </div>
</section>
        <section class="shop">
            <div class="title">
                <h1>Trending Products</h1>
            </div>
            <div class="row">
                <img src="93.jpg">
                <div class="row-detail">
                    <img src="93448368.webp">
                    <div class="top-footer">
                        <h1>a cup of green tea make you healthy</h1>
                    </div>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="knzfkegneolokoyhldtb.webp">
                    <a href="view_product.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="32.jpg">
                    <a href="view_product.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="dfcawc79kcwkj4utj4sm_525x525.webp">
                    <a href="view_product.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="128163-1-400.webp">
                    <a href="view_product.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="img/green-coffee-powder-frnt_600x.webp">
                    <a href="view_product.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="Green-Coffee-Extracts.jpg">
                    <a href="view_product.php" class="btn">shop now</a>
                </div>
            </div>
        </section>
        <section class="shop-category">
            <div class="box-container">
                <div class="box">
                    <img src="112.jpg">
                    <div class="detail">
                        <span>BIG OFFERS</span>
                        <h1>Extra 15% off</h1>
                        <a href="view_product.php"class="btn">shop now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="612.jpg">
                    <div class="detail">
                        <span>new in taste</span>
                        <h1>coffe house</h1>
                        <a href="view_product.php"class="btn">shop now</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="box-container">
                <div class="box">
                <img src="h.png">
                <div class="detail">
                    <h3>great savings</h3>
                    <p>save big every order</p>
                </div>
                </div>
                <div class="box">
                <img src="p.png">
                <div class="detail">
                    <h3>24*7 support</h3>
                    <p>one-on-one support</p>
                </div>
                </div>
                <div class="box">
                <img src="o.png">
                <div class="detail">
                    <h3>gift vouchers</h3>
                    <p>vouchers on every festivals</p>
                </div>
                </div>
                <div class="box">
                <img src="j.png">
                <div class="detail">
                    <h3>worldwide delivery</h3>
                    <p>dropship worldwide</p>
                </div>
              </div>
            </div>
        </section>
        <br>
        <br>
        <?php include 'footer.php'; ?>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       <!--<script src="script.js"></script>-->
        <script>
           
  const leftArrow = document.querySelector('.left-arrow i'),
        rightArrow = document.querySelector('.right-arrow i'),
        slider = document.querySelector('.slider');

  function scrollRight() {
    if (slider.scrollWidth - slider.clientWidth === slider.scrollLeft) {
      slider.scrollTo({
        left: 0,
        behavior: "smooth"
      });
    } else {
      slider.scrollBy({
        left: window.innerWidth,
        behavior: "smooth"
      });
    }
  }

  function scrollLeft() {
    slider.scrollBy({
      left: -window.innerWidth,
      behavior: "smooth"
    });
  }

  let timerId = setInterval(scrollRight, 7000);

  function resetTimer() {
    clearInterval(timerId);
    timerId = setInterval(scrollRight, 7000);
  }

  leftArrow.addEventListener('click', scrollLeft);
  rightArrow.addEventListener('click', scrollRight);
  slider.addEventListener('click', resetTimer);
</script>
<?php 
        include 'alert.php';
        ?>
    </body>
</html>
