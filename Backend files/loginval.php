<?php    

    session_start();

    $email = $_POST['email'];
    
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";    
    if(!preg_match($regex_email, $email)){
        echo "Incorrect email";
    }
    
    $pass = $_POST['password']; 
    
    if(strlen($pass) < 6){
        echo "Password should have atleast 6 characters";
    }
    
    $_SESSION['user'] = $email;

    $con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
    
    $email = mysqli_real_escape_string($con, $email);
    $pass = mysqli_real_escape_string($con, $pass);        
    
    $query = "select name,email,password,confirm_pwd from register where email='$email' and password='$pass'";
    $res = mysqli_query($con, $query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($res);

        if($rows == 1){   ?>

            <script>alert("Successfully logged in!");</script>
            <script>window.location.href = "http://localhost:8383/My%20Mobiles/users.html";</script>
            
<?php   }  else {  ?>
            
            <script>alert("Incorrect mail-id or password");</script>
            <script>window.location.href = "login.php";</script>
            
<?php   }    ?>
    
