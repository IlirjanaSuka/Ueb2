<?php
session_start();
$admin_id = $_SESSION['admin_id'];
if (!isset($admin_id)) {
    header('Location: login.php');
    exit();
}
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit();
}
/* Deleting orders */
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `orders` WHERE id=$delete_id") or die('Query failed');
    header('Location: admin_orders.php');
    exit();
}
/* Updating order */
if (isset($_POST['update_order'])) {
    $order_id = $_POST['order_id'];
    $update_payment = $_POST['update_payment'];

    mysqli_query($conn, "UPDATE `orders` SET payment_status='$update_payment' WHERE id='$order_id'")
        or die('Query failed');
    $message[] = 'Payment status updated successfully';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style_admin.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin panel</title>
    </head>
    <body>
        <?php include 'admin_header.php'?>
        <?php
        if (isset($message)) {
            foreach ($message as $msg) {
                echo '
                <div class="message">
                <span>'.$msg.'</span>
                <i class="bi bi-x-circle onclick="this.parentElement.remove()"></i>
                </div>';
            }
        }
        ?>
        <section class="order-container">
            <h1 class="title">total placed orders</h1>
            <div class="box-container">
                <?php
                $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('Query failed');
                if (mysqli_num_rows($select_orders) > 0) {
                    while ($fetch_orders = mysqli_fetch_assoc($select_orders)) {
                        ?>
                        <div class="box">
                            <p>user Name: <span><?php echo $fetch_orders['name'] ;?></span></p>
                            <p>user id: <span><?php echo $fetch_orders['user_id'] ;?></span></p>
                            <p>placed on: <span><?php echo $fetch_orders['place_on'] ;?></span></p>
                            <p>number: <span><?php echo $fetch_orders['number'] ;?></span></p>
                            <p>email: <span><?php echo $fetch_orders['email'] ;?></span></p>
                            <p>total price: <span><?php echo $fetch_orders['total_price'] ;?></span>/-</p>
                            <p>method: <span><?php echo $fetch_orders['method'] ;?></span></p>
                            <p>address: <span><?php echo $fetch_orders['address'] ;?></span></p>
                            <p>total products: <span><?php echo $fetch_orders['total_products'] ;?></span></p>
                            <form method="post">
                                <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id'];?>">
                                <select name="update_payment">
                                    <option disabled selected><?php echo $fetch_orders['payment_status'];?></option>
                                    <option value="pending">Pending</option>
                                    <option value="completed">Completed</option>
                                </select>
                                <input type="submit" name="update_order" value="Update Order" class="btn">
                                <a href="admin_orders.php?delete=<?php echo $fetch_orders['id'];?>" class="delete" onclick="return confirm('Delete this?')">Delete</a>
                            </form>
                        </div>
                        <?php        
                    }
                }
                ?>
            </div>
        </section>
        <script src="script_admin.js"></script>
    </body>
</html>
