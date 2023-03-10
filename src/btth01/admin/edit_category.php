<?php
    require"condb.php";

    
?>
<?php 
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
?>

<?php
    $sql = "select * from theloai where ma_tloai = $id";
    $qr = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_array($qr);
?>


<?php   
   
    if(isset($_POST["sua"])){

        $tentl = $_POST["txtCatName"];

        if($tentl == ""){echo "Vui long nhap ten the loai ";}

        if($tentl != ""){
            $sql = "update theloai set ten_tloai = '$tentl' where ma_tloai = $id";
            $qr = mysqli_query($conn,$sql);
            header("location: category.php");
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./">Trang ch???</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Trang ngo??i</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="category.php">Th??? lo???i</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="author.php">T??c gi???</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="article.php">B??i vi???t</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

    </header>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">C???M NH???N V??? B??I H??T</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">S???a th??ng tin th??? lo???i</h3>
                <form method="post" action="" >
                <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">M?? th??? lo???i</span>
                        <input type="text" class="form-control" name="txtCatId" readonly value="<?php echo $rows['ma_tloai']; ?>">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">T??n th??? lo???i</span>
                        <input type="text" class="form-control" name="txtCatName" value = "<?php echo $rows['ten_tloai'] ?>">
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="L??u l???i" class="btn btn-success" name = "sua">
                        <a href="category.php" class="btn btn-warning ">Quay l???i</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>