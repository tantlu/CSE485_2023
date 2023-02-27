<?php 
    require"condb.php";
?>

<?php 
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
?>
<?php
    $sql = "delete from theloai where ma_tloai = $id";
    $qr = mysqli_query($conn,$sql);
    header("location:category.php")
?>