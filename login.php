<?php
require 'function.php';
session_start();


//berfungsi menangkap data yg dikirimn
$user = $_POST['username'];
$pass = md5($_POST['password']);

//berfungsi menyeleksi data 
$sql = mysqli_query(koneksi(), "SELECT * FROM user WHERE username='$user' AND password='$pass'");

$result = mysqli_num_rows($sql);

if ($result >0) {
    $data=mysqli_fetch_assoc($sql);

    //cek level user (admin/user)
    if ($data['level']=="admin") {
        $_SESSION['user']=$data['username'];
        $_SESSION['level']="admin";

        //tentukan halaman yg diakses admin
        header ("Location:admin/index.php");
    }elseif ($data['level']=="user") {
        $_SESSION['user']=$data['username'];
        $_SESSION['level']="user";

        //tentukan halaman yg diakses admin 
        header("Location:user/index.php");
    }else{
        header("Location:index.php?alert=gagal");
    }
}
?>
