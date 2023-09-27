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
	     <img src="picture/img1.png" alt="student" width="500" height="300">

          <form action="registeruser.php" method="POST">
            Name:<br> <input type="text" placeholder="Enter your name" name="uname"><br><br>
            Email:<br> <input type="email" placeholder="Enter your name"   name="uemail"><br><br>
			Password: <br><input type="password" placeholder="Enter a secured password"  name="upass"><br><br>
			Mobile no:<br><input type="text" placeholder="Enter your mobile number"  name="utel"><br><br>
            Address:<br><input type="text" placeholder="Enter your address" name="uadd"><br><br>           
            
            <input type="submit" value="Register">
	  
        </form>
		</center>

    </body>
</html>