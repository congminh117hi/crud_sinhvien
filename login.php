<?php
//nhan du lieu tu form
$u = $_POST['username'];
$p = $_POST['password'];

//ket noi csdl
require_once 'ketnoi.php';
//truy van su lieu , tim username va password nhan duoc co trong csdl khong
$sql = "SELECT * FROM users where username='$u' and password = '$p'";

//thuc thi truy van
$rs = mysqli_query($conn, $sql);

if (mysqli_num_rows($rs) > 0){
    // echo "<h1> Dang nhap thanh cong </h1>";
    header("Location: lietke.php");
} else {
    echo "<h2>Dang nhap that bai</h2>";
}
?>
