<!--<?php
session_start();
$admin_id = $_SESSION['admin_id'];
if(!isset($admin_id)){
    header('loaction:login.php');
}
if (isset($_POST['logout'])){
    session_destroy();
    header('loaction:login.php');
}
/*deletin orders */
if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
   
    mysqli_query($conn, "DELETE FROM 'message' WHERE id=$delete_id") or die('query failed');

    header('loaction:admin_user.php');
}

?>-->

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
         if(isset($message)){
             foreach ($message as $message){
                 echo '
                 <div class="message">
                 <span>'.$message.'</span>
                 <i class="bi bi-x-circle onclick="this.parentElement.remove()"></i>
                 </div>';
             }
         }
         ?>
        <section class="order-container">
            <h1 class="title">message</h1>
            <div class="box-container">
            <?php
                $select_message = mysqli_query($conn, "SELECT * FROM 'message' ") or die('query failed');
                if(mysqli_num_rows($select_message)>0){
                    while($fetch_message  = mysqli_fetch_assoc($select_message )){

                ?>
                <div class="box">
                <p>user id: <span><?php echo $fetch_message ['user_id'] ;?></span></p>
                <p>user name: <span><?php echo $fetch_message ['name'] ;?></span></p>
                <p>email: <span><?php echo $fetch_message ['email'] ;?></span></p>
                <p><?php echo $fetch_message ['message'] ;?></p>
                <a href="admin_message.php?delete=<?php echo $fetch_message ['id']?>"class="delete"
                        onclick="return confirm('delete this')">Delete</a>
                </div>
                <?php
                        }
                    }else{
                        echo '<p class="empty">no message yet</p>';
                    }
                ?>
            </div>
        </section>
        <script src="script_admin.js"></script>
    </body>
</html>