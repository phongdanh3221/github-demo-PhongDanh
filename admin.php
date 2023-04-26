<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <?php
    include "database.php";
    include "uploadimage.php";
    $kq = connectDB("SELECT id, image, price, amount FROM giaynike");
    if (isset($_GET['edit']))
        $key = $_GET['edit'];
    if (isset($_GET["del"]) && $_GET["del"]) {
        $delId = $_GET['del'];
        deleteDB($delId);
        header("Location: admin.php");
    }
    if (isset($_POST["editProduct"]) && ($_POST["editProduct"])) {
        $id = $_POST['id'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        ///////
        updateDB("UPDATE giaynike SET  image='$image', price='$price' , amount='$amount' WHERE id='$id'");
        // $sql = "INSERT INTO dienthoai (id,tensanpham,gia,imageurl) VALUES ('$id','$name','$price','$img')";
        // $conn->exec($sql);  
        header("Location: admin.php");
    }
    if (isset($_POST["addProduct"]) && ($_POST["addProduct"])) {
        $id = $_POST['id'];
        // $image = $_POST['image'];
        $image = uploadimage();
        $price = $_POST["price"];
        $amount = 1;
        insertDB("INSERT INTO giaynike (id,price,image,amount) VALUES ('$id','$price','$image','$amount')");
        header("Location: admin.php");
    }
    ?>
</head>

<body>
    <form action="" method="post" class="m-4" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <label class="form-label">Nhập ID sản phẩm</label>
                <input class="form-control" type="text" name="id" value="<?php if (isset($key)) echo $kq[$key]['id'] ?>">
                <label class="form-label">Số lượng mua</label>
                <input class="form-control" type="text" name="amount" value="1">
                <br>
                <input type="submit" class="btn btn-primary" name="addProduct" value="Thêm sản phẩm">
                <input type="submit" class="btn btn-warning" name="editProduct" value="Cập nhật sản phẩm">

            </div>
            <div class="col-6">
                <label class="form-label">Nhập URL hình ảnh</label>
                <input disabled type="text" class="w-40 form-control " name="image" value="<?php if (isset($index)) echo $kq[$key]['image'] ?>">
                <input type="file" class="form-control" name="fileToUpload">
                <br>
                <label class="form-label">Giá sản phẩm</label>
                <input class="form-control" type="text" name="price" value=<?php if (isset($key)) echo $kq[$key]['price'] ?>>
            </div>
        </div>

    </form>
    <div class="card m-4 shadow">
        <div class="card-header">Quản lý sản phẩm</div>
        <div class="card-body">
            <table class="table table-sm">
                <tr>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <?php
                    foreach ($kq as $key => $item) {
                        $stt = $key + 1;
                        echo "
                                <tr>
                                    <td>$stt</td>
                                    <td>" . $item["id"] . "</td>
                                    <td><img src='" . $item["image"] . "' width='100px'></td>
                                    <td>" . $item["price"] . "</td>
                                    <td>
                                    <a href='admin.php?del=" . $item["id"] . "'>Delete</a>
                                    /
                                    <a href='admin.php?edit=" . $key . "'>Fix</td>
                                </tr>
                            ";
                    }
                    ?>
                </tr>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>