<?php

$conn = mysqli_connect('localhost', 'root', '', 'blood_donor');
    if (!$conn) {
        die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
    }

if(isset($_GET['bd_id'])) {
    $id = $_GET['bd_id'];
    $sql = "delete from blood_donor where bd_id = '$id'";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');
}

