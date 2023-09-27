<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8">
        <title>Super admin Log In Page</title>
		
        
    </head>
    
    <body>
        <form action="verifysuperadmin.php" method="POST">
            Email: <br><input type="email" placeholder="Enter your email" name="semail"><br><br>
            Password: <br><input type="password" placeholder="Enter your password" name="spass"><br><br>
            
            <input type="submit" value="Sign In">
        </form>
		<br>
		
		<button onclick="window.location.href='adminpart.php';">Return to admin page </button>
    </body>
</html>