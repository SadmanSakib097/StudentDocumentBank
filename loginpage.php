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
        <form action="verifyuser.php" method="POST">
            Email: <br><input type="email" placeholder="Enter your email" name="uemail"><br><br>
            Password: <br><input type="password" placeholder="Enter your password" name="upass"><br><br>
            
            <input type="submit" value="Sign In">
        </form>
    </body>
</html>