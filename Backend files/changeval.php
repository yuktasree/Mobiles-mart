<?php

    session_start();
    
    $con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
    
    $user = $_SESSION['user'];
    
    $old = $_POST['old-pwd'];
    
    $pwd = $_POST['pwd'];
    
    $con_pwd = $_POST['con_pwd'];
    
    $q = "select name,email,password,confirm_pwd from register where email='$user'";
    $r = mysqli_query($con, $q) or die(mysqli_error($con));
    $t = mysqli_fetch_array($r);
    
    if($t['password'] === $old) {
        
        $query = "update register set password='$pwd', confirm_pwd='$con_pwd' where email='$user'";
        $res = mysqli_query($con, $query) or die(mysqli_error($con));   ?>
    
        <script>
            alert("Password changed successfully");
            session_abort();
            window.location.href="login.php";
        </script>
        
<?php    } else {  ?>
    
        <script>
            alert("Incorrect password!");            
            window.location.href="changepwd.php";
        </script>
    
<?php    }    ?>  
            