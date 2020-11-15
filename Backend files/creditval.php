<?php  

    session_start();

    $email = $_SESSION['user'];    
    
    $mob = $_POST['mob'];
    $desp = $_POST['desp'];
    $price = $_POST['price'];
    
    $_SESSION['sel_mobile'] = $mob;
    $_SESSION['sel_price'] = $price;
    
?>


<!DOCTYPE html>

<html>
    
    <head>
        <title>Re-directing</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        
        <style>
            #lblCount{
                color: purple;
            }
            img{
                margin-left: 440px;
                /*margin-top: 30px;*/
            }
        </style>
                                       
    </head>
    
    <body>     
        
        <h1 style="color: darkgreen; margin-left: 460px; margin-top: 60px;">Validating...</h1>

        <img src="https://media0.giphy.com/media/3oEjI6SIIHBdRxXI40/200.gif" onload="DelayRedirect()" />
        
        <br />
        <br />
        
        <div id="dvCountDown" style = "display:none">
            <h1 style="color: darkgreen; margin-left: 312px;">You will be redirected in <span id = "lblCount"></span>&nbsp;seconds. </h1>
        </div>
        
        <script type="text/javascript">
            
            function DelayRedirect() {
                var seconds = 5;
                var dvCountDown = document.getElementById("dvCountDown");
                var lblCount = document.getElementById("lblCount");
                dvCountDown.style.display = "block";
                lblCount.innerHTML = seconds;
                setInterval(function () {
                    seconds--;
                    lblCount.innerHTML = seconds;
                    if (seconds == 0) {
                        dvCountDown.style.display = "none";
                        window.location = "checkout.php";
                    }
                }, 1000);
            }
        
        </script>        
                                
    </body>
    
</html>
