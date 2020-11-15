<!DOCTYPE html>

<html>
    
    <head>
        <title>Change Password</title>
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
        <h3 class="text-center text-white pt-5">Change password</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method="post" action="changeval.php">
                            
                            <div class="form-group">
                                <label for="password" class="text-info">Current password:</label><br>
                                <input type="password" name="old-pwd" class="form-control" required placeholder="Enter your current password" minlength="6">  
                            </div>
                            
                            <div class="form-group">
                                <label for="password" class="text-info">New password:</label><br>
                                <input type="password" name="pwd" class="form-control" required placeholder="Enter your new password" minlength="6">  
                            </div>
                            
                            <div class="form-group">
                                <label for="password" class="text-info">Confirm password:</label><br>
                                <input type="password" name="con_pwd" class="form-control" required placeholder="Re-enter your new password" minlength="6">
                            </div>                            
                            
                            <div class="form-group" style="margin-left: 140px;">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Change">                                
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    </body>
    
</html>

   