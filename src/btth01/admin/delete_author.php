<?php 
    require "condb.php";
?>

<?php 
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
?>
<?php
    $sql = "delete from tacgia where ma_tgia = $id";
    $qr = mysqli_query($conn,$sql);
    header("location:author.php")
?>