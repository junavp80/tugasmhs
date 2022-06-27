<?php
function koneksi(){
    $conn = mysqli_connect('localhost', 'root', '', 'pwd');
    if(!$conn){
        die("Koneksi Gagal:" . mysqli_connect_error());
    }
    return $conn;
}
?>