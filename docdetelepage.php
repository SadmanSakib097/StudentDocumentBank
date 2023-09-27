<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title> DELETE Page</title>
		<style>
            body { 
            background: Gray; 
          }
        </style>
    </head>
    
    <body>
	<h3>Remove Document</h3>
        <form action="docdeletepro.php" method="POST">
		            Account ID: <input type="number" name="dela"><br><br>
                    Document Number: <input type="number" name="deln"><br><br>
            
            
            <input type="submit" value="Ok">			
        </form>
				<br>
		
		        <br>
		   <button onclick="window.location.href='emphomepage.php';">Back to Homepage</button>
    </body>
</html>