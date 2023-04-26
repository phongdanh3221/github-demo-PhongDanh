<?php
    if(isset($_POST['logout'])){
        ($_SESSION['email']);
    }
    header('location: register.php');

?>
