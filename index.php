<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>Halaman User, Selamat Datang <?php echo $_SESSION['level']?></h1>
    <br><br>
    <br><br>
    <a href="logout.php">Logout</a>
</body>
</html>