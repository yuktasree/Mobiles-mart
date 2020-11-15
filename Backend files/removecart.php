<?php

    session_start();
    
    $con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
    
    $user = $_SESSION['user'];
    
    $rem_mob = $_POST['phone'];
    $query = "delete from cart where email='$user' and mob_name='$rem_mob'";
    $res = mysqli_query($con, $query) or die(mysqli_error($con)); 
    
?>
    
    <script>window.location.href="mycart.php";</script>
    
