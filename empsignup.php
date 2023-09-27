<!DOCTYPE html> 
<html>
    <head>
        
        <meta charset="utf-8">
        <title>empsignup Page</title>
		<style>
            body { 
            background: Gray; 
          }
        </style>
		
    </head>
    
    <body>
	  <center>
	    
			<h4>Create A New Account</h4>	
          <form action="registeremp.php" method="POST">
            Name:<br> <input type="text" placeholder="Enter your name" name="ename"><br><br>
            Email:<br> <input type="email" placeholder="Enter your name"   name="eemail"><br><br>
			Password: <br><input type="password" placeholder="Enter a secured password"  name="epass"><br><br>
			Mobile no:<br><input type="text" placeholder="Enter your mobile number"  name="etel"><br><br>
                     
            
            <input type="submit" value="Register">
	  
        </form>
		<h4>Already have a account?then login</h4>	
		 <button onclick="window.location.href='emplogin.php';">login </button>
		</center>

    </body>
</html>