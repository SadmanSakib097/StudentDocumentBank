<!DOCTYPE html> 
<html>
    <head>
        
        <meta charset="utf-8">
        <title>Signup Page</title>
		<style>
            body { 
            background: Gray; 
          }
        </style>
		
    </head>
    
    <body>
	  <center>
	     

         
		<br>
		<br>
		<br>

              <form action="maccount.php" method="post">
                <h3>SELECT YOUR ACCOUNT INFORMATION</h3>
				
				Customer ID:<br><input type="text" placeholder="Enter your Customer ID "  name="cid"><br><br>
				
				<select name="actype">
                    
                    <option value="Monthly">Monthly</option>
                    <option value="Yearly">Yearly</option>
                    
                </select>
				Account Opening Date: <br><input type="date" name="ad"><br><br>
				
				
				 <select name="cardtype">
                    
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="E wallet">E wallet</option>
                    
                </select>
				
				
				Card Information:<br><input type="text" placeholder="Enter your Card details"  name="aci"><br><br>
				
				  <input type="submit" value="DONE">
				
				
				
                





</center>

    </body>
</html>