<?php 
    // Bước 01: Kết nối tới DB Server
    $conn = mysqli_connect('localhost','root','','btth01_cse485');
    if(!$conn){
        die('Kết nối tới Server lỗi');
    }
?>
<?php

$sql = "SELECT * FROM baiviet ORDER BY ngayviet DESC LIMIT 4";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
<?php
    }
 }
?>