<?php 
include 'connection.php';
session_start();
if(isset($_SESSION['user_id'])){
    $user_id=$_SESSION['user_id'];
}else{
    $user_id='';
}

if(isset($_POST['logout'])){
    session_destroy();
    header("location:login.php");
}

?>
<style type="text/css">
    <?php include'style.css';?>
    </style>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Green Coffee-checkout page</title>
    </head>
    <body>
        <?php include 'header.php';?>
        <div class="banner">
            <h1>checkout summary</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a><span>checkout summary</span>
        </div>
<section class="checkout">
<div class="title">
    <img src="leaf.png" class="logo">
    <h1>checkout summary</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam repudiandae consequatur, voluptas velit ducimus dolore, nihil nemo esse et dolores dolor dicta a neque est dolorem vero eaque saepe magnam.</p>
</div>
    <div class="row">
    <form method="post">
        <h3>billing details</h3>
        <div class="flex">
            <div class="box">
                <div class="input-field">
                    <p>your name <span>*</span></p>
                    <input type="name" name="name" requiered maxlength="50" placeholder="Enter Your name" class="input">
                </div>
                <div class="input-field">
                    <p>your number <span>*</span></p>
                    <input type="number" name="number" requiered maxlength="10" placeholder="Enter Your number" class="input">
                </div>
                <div class="input-field">
                    <p>your email <span>*</span></p>
                    <input type="email" name="email" requiered maxlength="50" placeholder="Enter Your email" class="input">
                </div>
                <div class="input-field">
                    <p>payment method <span>*</span></p>
                   <select name="method" class="input">
                    <option value="cash on delivery">cash on delivery</option>
                    <option value="credit or debit card">credit or debit card</option>
                    <option value="net banking">net banking</option>
                    <option value="UPI or RuPay">UPI or RuPay</option>
                    <option value="paytm">paytm</option>
                   </select>
                </div>
                <div class="input-field">
                <p>address type <span>*</span></p>
                   <select name="address_type" class="input">
                    <option value="home">home </option>
                    <option value="office">office</option>
                   </select>
                </div>
            </div>
            <div class="box">
            <div class="input-field">
                    <p>address line 01 <span>*</span></p>
                    <input type="text" name="flat" requiered maxlength="50" placeholder="e.g flat & building number" class="input">
                </div>
                <div class="input-field">
                    <p>address line 02 <span>*</span></p>
                    <input type="text" name="street" requiered maxlength="50" placeholder="e.g street name" class="input">
                </div>
                <div class="input-field">
                    <p>city name <span>*</span></p>
                    <input type="text" name="city" requiered maxlength="50" placeholder="Enter yoour city name" class="input">
                </div>
                <div class="input-field">
                    <p>country name <span>*</span></p>
                    <input type="text" name="country" requiered maxlength="50" placeholder="Enter your country name" class="input">
                </div>
                <div class="input-field">
                    <p>pincode <span>*</span></p>
                    <input type="text" name="pincode" requiered maxlength="6" placeholder="110022"min="0"  max="999999" class="input">
                </div>
            </div>
        </div>
        <button type="submit" name="place_order" class="btn">place order</button>
    </form>
    <div class="summary">
<h3>my bag</h3>
<div class="box-container">
    <?php
    $grand_total=0;
    if(isset($_GET['get_id'])){
        $select_get=$conn->prepare("SELECT * FROM 'products' WHERE id=?");
        $select_get->execute([$_GET['get_id']]);
        while($fetch_get=$select_get->fetch(POD::FETCH_ASSOC)){
            $sub_total=$fetch_get['price'];
            $grand_total+=$sub_total;
            ?>
            <div class="flex">
                <img src="image/<>=$fetch_get['image'];?> "class="image">
                <div>
                  <h3 class="name"><?=$fetch_get['name'];?></h3>
                  <p class="price"><?=$fetch_get['price'];?>/-</p>
                </div>
            </div>
            <?php
        }
    }else{
        $select_cart=$conn->prepare("SELECT*FROM 'cart' WHERE user_id=?");
        $select_cart->execute([$user_id]);
        if($select_cart->rowCount()>0){
while($fetch_cart=$select_cart->fetch(POD::FETCH_ASSOC)){
    $select_products=$conn->prepare("SELECT*FROM'products'WHERE id=?");
    $select_products->execute([$fetch_cart['product_id']]);
    $fetch_product=$select_products->fetch(POD::FETCH_ASSOC);
    $sub_total=($fetch_cart['qty']*$fetch_product['price']);
    $grand_total+=$sub_total;
    ?>
    <div class="flex">
        <img src="image/<?$fetch_product['image'];?>">
        <div>
            <h3 class="name"><?$fetch_product['name'];?></h3>
            <p class="price"><?$fetch_product['price'];?>X <?$fetch_cart['qty'];?></p>
        </div>
    </div>
    <?php
}
        }else{
            echo '<p class="empty">your cart is empty</p>';
        }
    }
    ?>
</div>
<div class="grand-total">
    <span>total amount payable:</span>$<?=$grand_total?>/-
</div>
    </div>
</div>
</section>
<?php include 'footer.php';?>
</div>
<script src="https://sdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="script.js"></script>
<?php include 'alert.php';?>
</body>
</html>
