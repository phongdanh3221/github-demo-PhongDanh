<?php
	session_start();
	ob_start();

    include "cndb.php";
    include "register.php";
    if(isset($_POST['login'])&&$_POST['login']){
        $Email = $_POST['email'];
        $pass = md5($_POST['pswd']);
        echo '$pass';
        $Emailre = md5(checkUser($Email,$pass));
        // $_SESSION['email'] = $Emailre;
        if($Email == $Emailre){
            header('location: index.php');
        }else{
            header('location: login_learn.php');
            echo "Đăng nhập thất bại !";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style-login.css">
    <script type="text/javascript" src="js/login.js"></script>
    <?php
    if (isset($_POST["signup"]) && ($_POST["signup"])) {
        $UserName = $_POST['txt'];
        $Email = $_POST['email-re'];
        $PassWord = $_POST['pswd-re'];
        register("INSERT INTO datacustomer (User_Name,Email,PassWord,user,pass) VALUES ('$UserName','$Email','$PassWord','$UserName','$PassWord')");
    }
    ?>
</head>   


<body onload="load()">
    <div class="container" id="main" >
        <div class="sign-up">
            <form action="" method="post" enctype="multipart/form-data">
                <h1>Create Account</h1>
                <p>or use your email for registration</p>
                <input type="text" name="txt" placeholder="Name" required=""> 
                <input type="email" name="email-re" placeholder="Email" required="">
                <input type="password" name="pswd-re" placeholder="Password" required="">
                <input class="login" type="submit" name="signup" value="Sign Up"></input>
            </form>
        </div>
        <div class="sign-in">
            <form action="" method="post">
                <h1>Create Account</h1>
                <p>or use your account</p>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pswd" placeholder="Password" required="">
                <a href="#">Forget your Password? </a>
                <input class="login" type="submit" name="login" value="Sign In"></input>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Wellcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    // if (isset($_POST['login']) && ($_POST['login'])) {
    //     $user = $_POST['email'];
    //     $pass = $_POST['pswd'];
    //     if ($user == 'admin@123' && $pass == '123') {
    //         echo 'Däng nhâp thânh công';
    //         setcookie('user', $user, time() + (86400), "/");
    //         setcookie('pswd', $pass, time() + (86400), "/");
    //         header('location: index.php');
    //     } else echo 'Dâng nhâp thât bai';
    //     if (isset($_COOKIE['user'])) {
    //         echo "Cookie dä luu là: " . $_COOKIE['user'];
    //     }
    //     if (isset($_COOKIE['pswd'])) {
    //         echo "Cookie dä luu la: " . $_COOKIE['pswd'];
    //     }
    // }
    ?>
    </form>
</body>

</html>