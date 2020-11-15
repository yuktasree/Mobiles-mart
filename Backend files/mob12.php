<?php  

    session_start();
    
    $user = $_SESSION['user'];

    $mob = "OnePlus 8 5G";
    $desp = "Glacial Green 6GB RAM+128GB Storage";
    $price = 41999;
    
    $con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
    
    $q = "select email, mob_name, description, price from cart where email = '$user' and mob_name = '$mob'";
    $r = mysqli_query($con, $q) or die(mysqli_error($con));
    $rows = mysqli_num_rows($r);
    
    if($rows >= 1) {   ?>

        <script> alert("Product already added to cart!");
        window.location.href="http://localhost:8383/My%20Mobiles/users.html";</script> 
        
<?php    } else {   
    
        $query = "insert into cart(email, mob_name, description, price) values ('$user' ,'$mob','$desp','$price')";
        $res = mysqli_query($con, $query) or die(mysqli_error($con));  ?>
        <script>alert("Product successfully added to cart!");
        window.location.href="http://localhost:8383/My%20Mobiles/users.html";</script>   
        
<?php    }   ?>

