<?php 
    
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confo = $_POST['confirm_password'];

    $con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
    
    $query = "select name,email,password,confirm_pwd from register where email='$email'";
    $res = mysqli_query($con, $query) or die(mysqli_error($con));
    
    $rows = mysqli_num_rows($res);
    
    if($pass !== $confo) {    ?>
        
        <script> alert("Password and confirm password should match."); 
                 window.location.href = "signup.php"; </script>
        
<?php   } else if($rows > 0){     ?>
        
        <script> alert("You have already registered! Please login."); 
                 window.location.href = "login.php"; </script>                
        
<?php   } else {
    
        $ins = "insert into register(name,email,password,confirm_pwd) values ('$user','$email','$pass','$confo')";
        $res = mysqli_query($con, $ins) or die(mysqli_error($con));  ?>
        <script> window.location.href = "http://localhost:8383/My%20Mobiles/welcome.html"; </script>
    
<?php   }   ?>

