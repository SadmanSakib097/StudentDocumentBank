
<?php
    session_start();

    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
   
   
    if(isset($_POST['canid']) && isset($_POST['acand']) && !empty($_POST['canid']) && !empty($_POST['acand'])){
        
        $var1=$_POST['canid'];
        $var2=$_POST['acand'];
        
		   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="UPDATE account SET Date_closed='$var2' WHERE Account_id='$var1' ";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('accountdetails.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('cancelsub.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('cancelsub.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('cancelsub.php')</script>
    
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





