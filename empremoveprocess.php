<?php
   
    if(isset($_POST['eemail']) && isset($_POST['eid']) && !empty($_POST['eemail']) && !empty($_POST['eid'])){
        
        $var1=$_POST['eemail'];
        $var2=$_POST['eid'];
       
		   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="DELETE FROM employee
                    WHERE employee_id='$var2' AND email='$var1'";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('empdetails.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('empdetails.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('empdetails.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('empremove.php')</script>
    
        <?php
        
    }
?>