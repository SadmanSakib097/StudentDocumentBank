<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title>Log In Page</title>
		<style>
            body { 
            background: Gray; 
          }
        </style>
    </head>
    
    <body>
        <form action="verifyemp.php" method="POST">
            Email: <br><input type="email" placeholder="Enter your email" name="eemail"><br><br>
            Password: <br><input type="password" placeholder="Enter your password" name="epass"><br><br>
            
            <input type="submit" value="Sign In">
        </form>
		<br>
		
		<button onclick="window.location.href='adminpart.php';">Return to admin page </button>
    </body>
</html>