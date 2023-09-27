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
	<h3>Remove Employee</h3>
        <form action="empremoveprocess.php" method="POST">
            Employee's Email: <br><input type="email" placeholder="Enter employee email" name="eemail"><br><br>
            Employee's ID:<br><input type="text" placeholder="Enter Employees id"  name="eid"><br><br>
            
            <input type="submit" value="Ok">			
        </form>
				<br>
		
		<button onclick="window.location.href='superadminhomepage.php';">back </button>
    </body>
</html>