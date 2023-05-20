<?php
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo "Fjalëkalimi i ri dhe konfirmimi i tij nuk përputhen.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="reset_password_process.php">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="text" name="reset_code" placeholder="Kodi i rivendosjes së fjalëkalimit">
    <input type="password" name="new_password" placeholder="Fjalëkalimi i ri">
    <input type="password" name="confirm_password" placeholder="Konfirmo fjalëkalimin e ri">
    <input type="submit" value="Rivendos fjalëkalimin">
</form>
</body>
</html>
