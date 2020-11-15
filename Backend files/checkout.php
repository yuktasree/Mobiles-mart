<!DOCTYPE html>

<html>
    <head>        
        <title>Check out</title>        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
        <style>
            
            body {
                    color: #fff;
                    background: forestgreen;
                    font-family: 'Roboto', sans-serif;
            }
            .form-control {
                    font-size: 15px;
            }
            .form-control, .form-control:focus, .input-group-text {
                    border-color: #e1e1e1;
            }
            .form-control, .btn {        
                    border-radius: 3px;
            }
            .signup-form {
                    width: 400px;
                    margin: 0 auto;
                    padding: 30px 0;		
            }
            .signup-form form {
                    margin-left: 5px;
                    color: #999;
                    border-radius: 3px;
                    margin-bottom: 15px;
                    background: #fff;
                    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                    padding: 30px;
            }
            .signup-form h2 {
                    color: forestgreen;
                    font-weight: bold;
                    margin-top: 0;
            }
            .signup-form hr {
                    margin: 0 -30px 20px;
            }
            .signup-form .form-group {
                    margin-bottom: 20px;
            }
            .signup-form label {
                    font-weight: normal;
                    font-size: 15px;
            }
            .signup-form .form-control {
                    min-height: 38px;
                    box-shadow: none !important;
            }	
            .signup-form .input-group-addon {
                    max-width: 42px;
                    text-align: center;
            }	
            .signup-form .btn, .signup-form .btn:active {        
                    font-size: 16px;
                    font-weight: bold;
                    background: forestgreen !important;
                    border: none;
                    min-width: 140px;
            }
            .signup-form .btn:hover, .signup-form .btn:focus {
                    background: forestgreen !important;
            }
            .signup-form a {
                    color: #fff;	
                    text-decoration: underline;
            }
            .signup-form a:hover {
                    text-decoration: none;
            }
            .signup-form form a {
                    color: #19aa8d;
                    text-decoration: none;
            }	
            .signup-form form a:hover {
                    text-decoration: underline;
            }
            .signup-form .fa {
                    font-size: 21px;
            }
            .signup-form .fa-address-card {
                    font-size: 12px;
            }
            .signup-form .fa-check {
                    color: #fff;
                    left: 17px;
                    top: 18px;
                    font-size: 7px;
                    position: absolute;
            }
            
        </style> 
        
        <script>
            
            function val(value){                
                var reg = new RegExp("[A-Za-z]");
                if (!reg.test(value)) {
                    alert("Please enter proper name!")
                    return "";
                }
                else {
                    return value;
                }
            }
            
        </script>
        
    </head>
    
    <body>
        
    <div class="signup-form">    
      
    <form name="myForm" action="http://localhost/EcomPhp/bill.php" method="post">
            <h2>Check out</h2>
            <p style="color: darkgreen;">Please fill in your details to deliver your products</p>
            <hr>
    <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user" style="color: darkgreen;"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="name" onchange="this.value = val(this.value)" placeholder="Customer name" required="required">
            </div>
    </div>
    <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-address-card" aria-hidden="true" style="color: darkgreen;"></i>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="address" placeholder="Address" required="required" maxlength="50">                
            </div>
    </div>
    <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-map-marker" style="color: darkgreen;"></i>
                    </span>                    
                </div>
                <input type="tel" class="form-control" name="pin" onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));" placeholder="Pin number" required="required" minlength="6" maxlength="6">
            </div>
    </div>
    <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-phone" style="color: darkgreen;"></i>                        
                    </span>                    
                </div>
                <input type="tel" class="form-control" name="phone" onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));" placeholder="Phone number" required="required" minlength="10" maxlength="10">                                 
            </div>
    </div>

    <div class="form-group" style="margin-left: 90px;">
        <button type="submit" class="btn btn-primary btn-lg">Check out</button>
    </div>


    </form>
    

    </div>                
        
    </body>
    
</html>
 
