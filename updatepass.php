<?php
    session_start();

    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
        ?>

<!DOCTYPE html> 
<html>
    <head>
        
        <meta charset="utf-8">
        <title>Update Personal details</title>
		<style>
            body { 
            background: White; 
          }
        </style>
		
    </head>
    
    <body>
	  

          <form action="updatepassword.php" method="POST">
           Enter New Password : <input type="password" placeholder="Enter New Password" name="newpass"><br><br>
			          
            
            <input type="submit" value="Confirm Password Change">
	  
        </form>
		

    </body>
</html>



<?php
    }
    else{
      
        ?>
            <script>
                window.location.assign('loginpage.php');
            </script>
        <?php
    }
?>






