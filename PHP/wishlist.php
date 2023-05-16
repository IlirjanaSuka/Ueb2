<?php
include 'connection.php';
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}
if (isset($_POST['logout'])) {
    session_destroy();
    header("location: login.php");
}

if (isset($_POST['add_to_cart'])) {
    $id = unique_id();
    $product_id = $_POST['product_id'];

    $qty = 1;
    $qty = filter_var($qty, FILTER_SANITIZE_STRING);

    $varify_cart = $conn->prepare("SELECT * FROM cart WHERE user_id = ? AND product_id = ?");
    $varify_cart->execute([$user_id, $product_id]);

    $max_cart_items = $conn->prepare("SELECT * FROM cart WHERE user_id = ?");
    $max_cart_items->execute([$user_id]);

    if ($varify_cart->rowCount() > 0) {
        $warning_msg[] = 'product already exists in your wishlist';
    } else if ($max_cart_items->rowCount() > 20) {
        $warning_msg[] = 'cart is full';
    } else {
        $select_price = $conn->prepare("SELECT * FROM products WHERE id = ? LIMIT 1");
        $select_price->execute([$product_id]);
        $fetch_price = $select_price->fetch(PDO::FETCH_ASSOC);

        $insert_cart = $conn->prepare("INSERT INTO cart (id, user_id, product_id, price, qty) VALUES (?, ?, ?, ?, ?)");
        $insert_cart->execute([$id, $user_id, $product_id, $fetch_price['price'], $qty]);
        $success_msg[] = 'product added to cart successfully';
    }
}

if (isset($_POST['delete_item'])) {
    $wishlist_id = $_POST['wishlist_id'];
    $wishlist_id = filter_var($wishlist_id, FILTER_SANITIZE_STRING);

    $varify_delete_items = $conn->prepare("SELECT * FROM wishlist WHERE id = ?");
    $varify_delete_items->execute([$wishlist_id]);

    if ($varify_delete_items->rowCount() > 0) {
        $delete_wishlist_id = $conn->prepare("DELETE FROM wishlist WHERE id = ?");
        $delete_wishlist_id->execute([$wishlist_id]);
        $success_msg[] = "wishlist item delete successfully";
    } else {
        $warning_msg[] = 'wishlist item already deleted';
    }
}
?>

<style type="text/css">
    <?php include 'style.css'; ?> 
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Green coffee - wishlist page</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>my wishlist</h1>
        </div>
        <div class="title2">
            <a href="home.php">home </a><span>wishlist</span>
        </div>
        <section class="products">
            <h1 class="title">products added to wishlist</h1>
            <div class="box-container">
                <?php 
