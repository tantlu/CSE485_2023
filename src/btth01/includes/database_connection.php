<?php 
    // Bước 01: Kết nối tới DB Server
    $conn = mysqli_connect('localhost','root','','btth01_cse485');
    if(!$conn){
        die('Kết nối tới Server lỗi');
    }
?>
