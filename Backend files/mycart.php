<?php

    session_start();
    
    $con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
    
    $user = $_SESSION['user'];
    
    $query = "select email,mob_name,description,price from cart where email='$user'";
    $res = mysqli_query($con, $query) or die(mysqli_error($con));
    $nums = mysqli_num_rows($res);    
    $counter = 1;
    
    $sql = "select sum(price) as total from cart where email='$user'";
    $set = mysqli_query($con, $sql) or die(mysqli_error($con));
    $r = mysqli_fetch_array($set);
    $sum = $r['total'];
    
?>

<html>
    <head>
        <title>My cart</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>                 
    </head>
    
    <body style="background: url('https://image.freepik.com/free-photo/pink-background-with-flowers-borders_23-2147721648.jpg'); opacity:100%; background-repeat: no-repeat; background-size: 1092px 940px;">
        
        
        <div class="container-fluid" style="height: 110px;">
            <div class="row">
                <div class="col-xs-offset-5 col-xs-2" style="margin-top: 50px;"><h3 style="color: green;">My cart <span class="glyphicon glyphicon-shopping-cart"></span></h3></div>
                <div class="col-xs-offset-2 col-xs-3" style="margin-top: 68px;"><h4 style="color: blue;"><span class="glyphicon glyphicon-home"></span> <a href="http://localhost:8383/My%20Mobiles/users.html">Home</a></h4></div>
            </div>
        </div>                 
    
            <?php 
            
            echo '                                
                                  
            <div class="container">  
                <div class="row">
                    <div class="col-xs-1"><h4><b>Item</b></h4></div>                        
                    <div class="col-xs-5"><h4><b>Mobile</b></h4></div>                        
                    <div class="col-xs-3"><h4><b>Description</b></h4></div>                        
                    <div class="col-xs-1"><h4><b>Price</b></h4></div>  
                </div>
            </div>     <br/>  ';
                                       
             while($rows = mysqli_fetch_array($res)) {
            echo'
                
            <div class="container">
                <div class="row" id='.$counter.'>
                    <div class="col-xs-1">'. $counter . '</div>  

                    <div class="col-xs-4"><b>'. $rows['mob_name'].'</b></div>                        

                    <div class="col-xs-4">'. $rows['description'].'</div>           

                    <div class="col-xs-1"><b>'. $rows['price'].'</b></div> 

                    <div class="col-xs-1">
                        <form method="post" action="removecart.php">
                        <input type="hidden" name="phone" value="'. $rows['mob_name'].'"> 
                        <input type="submit" name="name'.$counter.'" class="btn btn-success btn-sm"  value="Remove" id="button'.$counter.'" />                                           
                        </form>
                    </div>                                                 
                </div>
            </div>
                
                <br/>  ' ;                                                                                                                                                         
   
                $counter++;  }                                        
                 
            ?>
       
        
        <h4 style="margin-left: 680px; margin-top: -10px; color: green;"><b>Total &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $sum; ?></b></h4>
             
     
    </body>
</html>
    
    
