<?php
    session_start();

    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
   
   
    if(isset($_POST['newpass']) && !empty($_POST['newpass'])){
        
        $var1=md5($_POST['newpass']);
        $var2=$_SESSION['useremail'];
        
		   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="UPDATE customers SET Password='$var1' WHERE Email='$var2' ";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('personaldetails.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('updatepass.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('updatepass.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('updatepass.php')</script>
    
        <?php
        
    }
?>


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





