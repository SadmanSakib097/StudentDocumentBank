<!DOCTYPE html> 
<html>
    <head>
        
        <meta charset="utf-8">
        <title>MAKE NEW PAYMENT</title>
		<style>
            body { 
            background: Gray; 
          }
        </style>
		
    </head>
    
    <body>
	  <center>
	     

          <form action="makepayment.php" method="POST">
            Account ID:<br> <input type="text" placeholder="Enter your account ID" name="pid"><br><br>
			Payment Serial:<br><input type="text" placeholder="Enter the serial number"  name="ps"><br><br> 
            Payment Amount :<br> <input type="text" placeholder="Enter Payment Amount"   name="pa"><br><br>
			Payment Date: <br><input type="date" name="pd"><br><br>
			Card Number:<br><input type="text" placeholder="Enter your card number"  name="pn"><br><br>
            
            <input type="submit" value="Pay">
	  
	  <br>
	  <br>
	  <a href="paymentdetails.php"><b>GO BACK</b></a>

<br>
<br>
	  
	  
	  
        </form>
		</center>

    </body>
</html>