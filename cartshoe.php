<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: "Montserrat", Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #f0f0f0;
            color: #333;
        }

        th,
        td {
            text-align: center;
            padding: 10px 20px;
        }

        th {
            background-color: #333;
            color: #fff;
            font-weight: normal;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        input[type='submit'] {
            cursor: pointer;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            transition: all 0.3s ease;
        }

        input[type='submit']:hover {
            background-color: #fff;
            color: #333;
            border: 1px solid #333;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            width: 90%;
            margin: 20px auto;
        }

        .button-container a {
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #333;
            border-radius: 5px;
            color: #333;
            transition: all 0.3s ease;
        }

        .button-container a:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <th>Tên</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tiền</th>
            <th>Xóa</th>
        </tr>


        <?php
        //xóa sản phẩm.
        if (isset($_POST['delete'])) {
            $a = $_POST['key'];
            unset($_SESSION['Cart'][$a]);
            echo '<script>
            window.location.href() = window.location.href();
            </script>';
        }
        ?>


        <?php
        //hiển thị bên cart.
        foreach ($_SESSION['Cart'] as $key => $item) {
            echo '            <tr>
            <td>' .  $item['id'] . '</td>
            <td><img src="' .  $item['image'] . '" width="100px"></td>
            <td>' .  $item['price'] . '</td>
            <td>
            <a href="cartshoe.php?increase='.$key.'"> - </a>
                '. $item['amount'] .'
            <a href="cartshoe.php?decrease='.$key.'"> + </a>
            </td>
            <td>' . $item['amount']*$item['price'] . '</td>
                <input type="hidden" name="key" value="' . $key . '">
            <td>
                <a href="cartshoe.php?del='.$key.'">Xóa</a>
            </td>
        </tr>';
            # code...
        }
        ?>
 <?php
    if(isset($_GET['del'])){
        if($_GET['del']=='all'){
            unset($_SESSION['Cart']);
            header("Location: index.php");
        } else{
            $index=$_GET['del'];
            unset($_SESSION['Cart'][$index]);
            header("Location: cartshoe.php");
        }
    }
    if(isset($_GET['increase'])){   
       $index=$_GET['increase'];
       if($_SESSION['Cart'][$index]['amount']>1){
         $_SESSION['Cart'][$index]['amount']-=1;
       }
       header("Location: cartshoe.php");

    }
    if(isset($_GET['decrease'])){
        $index=$_GET['decrease'];
        echo "<h1>du lieu la: $index </h1>";
        $_SESSION['Cart'][$index]['amount']+=1;
        header("Location: cartshoe.php");

    }
    ?>

        <tr>
            <td colspan="4">Tổng tiền</td>
            <td colspan="2">
                <?php
                $tongtien = 0;
                $a = 0;
                foreach ($_SESSION['Cart'] as $item) {
                    $a = $item['price']*$item['amount'];
                    $tongtien += $a;
                }
                echo $tongtien;
                ?>
            </td>
        </tr>
    </table>
   

    <a href="index.php">Home</a>
    <a href="billshoe.php"> Xuất hóa đơn </a>
</body>

</html>