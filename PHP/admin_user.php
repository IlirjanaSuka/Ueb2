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
    mysqli_query($conn, "DELETE FROM `users` WHERE id=$delete_id") or die('Query failed');
    header('Location: admin_user.php');
    exit();
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
            <h1 class="title">total registered users</h1>
            <div class="box-container">
                <?php
                $select_users = mysqli_query($conn, "SELECT * FROM `users`") or die('Query failed');
                if (mysqli_num_rows($select_users) > 0) {
                    while ($fetch_users = mysqli_fetch_assoc($select_users)) {
                        ?>
                        <div class="box">
                            <p>user id: <span><?php echo $fetch_users['id'] ;?></span></p>
                            <p>user name: <span><?php echo $fetch_users['name'] ;?></span></p>
                            <p>email: <span><?php echo $fetch_users['email'] ;?></span></p>
                            <p>user type: <span style="color:<?php if($fetch_users['user_type']=='admin'){echo 'organe';};?>">
                            <?php echo $fetch_users['user_type'] ;?></span></p>
                            <a href="admin_user.php?delete=<?php echo $fetch_users['id'];?>" class="delete"
                                onclick="return confirm('Delete this?')">Delete</a>
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
