<?php
//nhan du lieu tu form
$ht = $_POST['hoten'];
$masv = $_POST['masv'];
$lop = $_POST['lop'];
$id = $_POST['sid'];
//ket noi csdl
require_once 'ketnoi.php';
//viet lenh sql de them du lieu
$updatesql = "UPDATE sinhvien SET masv='$masv', hoten= '$ht', lop='$lop' WHERE id=$id";
// echo $updatesql; exit;
//thuc thi cau lenh them
if (mysqli_query($conn, $updatesql)){
    //in thong bao thanh cong
    //tro ve trang liet ke
header("Location: lietke.php");
}

