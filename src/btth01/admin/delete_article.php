<?php 
    require "condb.php";
?>

<?php 
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
?>
<?php
    $sql = "delete from baivet where ma_bviet = $id";
    $qr = mysqli_query($conn,$sql);
    header("location:article.php")
?>