<!DOCTYPE html>

<html>
    
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <style>
            
            body {
              margin: 0;
              padding: 0;
              background-color: #17a2b8;
              height: 100vh;
            }
            #login .container #login-row #login-column #login-box {
              margin-top: 40px;
              max-width: 600px;
              height: 350px;
              border: 1px solid #9C9C9C;
              background-color: #EAEAEA;
            }
            #login .container #login-row #login-column #login-box #login-form {
              padding: 20px;
            }
            #login .container #login-row #login-column #login-box #login-form #register-link {
              margin-top: -85px;
            }
            
        </style>
        
    </head>
    
    <body>
        
        <div id="login">
        <h3 class="text-center text-white pt-5">Welcome Back!</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="http://localhost/EcomPhp/loginval.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">Email id:</label><br>
                                <input type="email" name="email" id="mail" class="form-control" required placeholder="Enter your mail-id">  
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required placeholder="Enter your password" minlength="6">
                            </div>
                            <div class="form-group">
                                <label for="register"><span>Not Registered? Then <a href="signup.php">Register here</a></span></label><br>
                            </div>
                            
                            <div class="form-group" style="margin-left: 140px;">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit">                                
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    </body>
    
</html>

