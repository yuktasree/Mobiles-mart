<?php 

    session_start();
    $email = $_SESSION['user'];
    
    $mobile = $_SESSION['sel_mobile'];
    $price = $_SESSION['sel_price'];
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];          
                
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Invoice</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
        <style>
            
        .invoice-title h2, .invoice-title h3 {
            display: inline-block;
        }

        .table > tbody > tr > .no-line {
            border-top: none;
        }

        .table > thead > tr > .no-line {
            border-bottom: none;
        }

        .table > tbody > tr > .thick-line {
            /*margin-top: 2px;*/
            border-top: 2px solid;
        }
        
        </style>
        
        <script>
            
            function date(){
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();

            today = mm + '/' + dd + '/' + yyyy;
            document.write(today);
        }
            
        </script>
        
    </head>
    
    <body>
        
<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Sree Mobiles</h2><h3 class="pull-right"># Pre-paid Order</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>                                            
                                    <?php echo $name;  ?><br>
                                    <?php echo $address;  ?><br>	  					
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>To be Shipped To:</strong><br>
                                    <?php echo $name;  ?><br>
                                    <?php echo $address;  ?><br>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Contact details:</strong><br>
    					<?php echo $phone;  ?><br>
    					<?php echo $email;  ?>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
                                            <script> date(); </script><br><br>
                                            <strong>Payment done</strong> via card
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
                                    <td><strong>Item</strong></td>
                                    <td class="text-center"><strong>Price</strong></td>
                                    <td class="text-center"><strong>Quantity</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
    						</thead>
                                <tbody>    							
                                <tr>
                                    <td><?php echo $mobile;  ?></td>
                                    <td class="text-center"><?php echo $price;  ?></td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">&#8377;<?php echo $price;  ?></td>
                                </tr>
                                                               
                                
                                <tr>
                                        <td class="thick-line"></td>
                                        <td class="thick-line"></td>
                                        <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                        <td class="thick-line text-right">&#8377;<?php echo $price;  ?></td>
                                </tr>
                                <tr>
                                        <td class="no-line"></td>
                                        <td class="no-line"></td>
                                        <td class="no-line text-center"><strong>Shipping</strong></td>
                                        <td class="no-line text-right">&#8377; 0</td>
                                </tr>
                                <tr>
                                        <td class="no-line"></td>
                                        <td class="no-line"></td>
                                        <td class="no-line text-center"><strong>Total</strong></td>
                                        <td class="no-line text-right">&#8377;<?php echo $price;  ?></td>
                                </tr>
                                </tbody>                                                                
                                
    					</table>
    				</div>
    			</div>
                    <h4 style="text-align: center; margin-top: -20px;"><b>Thank you! Visit Again.</b></h4>
                    <button style="margin-left: 420px; margin-top: 5px;" onclick="window.location.href='logout.php'"><h5 style="text-align: center;"><b>Back home</b></h5></button>
    		</div>                        
            
    	</div>
    </div>
</div>
 
    </body>
    
</html>