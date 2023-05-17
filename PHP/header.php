<header class="header">
    <div class="flex">
        <a href="home.php"class="logo"><img src="img/im.png"></a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="view_product.php">view_product</a>
            <a href="order.php">orders</a>
            <a href="about.php">about us</a>
            <a href="contact.php">contact us</a>
        </nav>
        <div class="icons">
            <i class="bx bxs-user" id="user-btn"></i>
            <a href="wishlist.php"class="cart-btn"><i class="bx bx-heart"></i><sup>0</sup></a>
            <a href=" cart.php" class="cart-btn"><i class="bx bx-cart-download"></i><sup>0</sup></a>
            <i class="bx bx-list-plus"id="menu-btn" style="font-size: 2rem;"></i>
        </div>
        <div class="user-box">
            <p>username:<span><?php //echo $_SESSION['user_name']; ?></span></p>
            <p>Email:<span><?php //echo $_SESSION['user_email']; ?></span></p>
            <a href="login.php"class="btn">login</a>
            <a href="register.php"class="btn">register</a>
            <form method="post">
                <button type="submit" name="logout"class="logout-btn">log out</button>
            </form>
        </div>
    </div>
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
</header>
