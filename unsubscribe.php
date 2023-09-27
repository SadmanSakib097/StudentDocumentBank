
<?php
    session_start();

    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
        ?>

<!DOCTYPE html> 
<html>
    <head>
        
        <meta charset="utf-8">
        <title>Unsubscribe</title>
		<style>
            body { 
            background: White; 
          }
        </style>
		
    </head>
    
    <body>
	  

          <form action="cancelsub.php" method="POST">
            Enter your account ID : <input type="text" placeholder="Enter your account ID" name="canid"><br><br>
           
			Account Closing Date : <br><input type="date" name="acand"><br><br>
			          
            
            <input type="submit" value="Confirm Cancellation">
	  
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






