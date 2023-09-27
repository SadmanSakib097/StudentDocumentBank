<?php
   
    if(isset($_POST['dela']) && isset($_POST['deln']) && !empty($_POST['dela']) && !empty($_POST['deln'])){
        
        $var1=$_POST['dela'];
        $var2=$_POST['deln'];
       
		   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="DELETE FROM Document
                    WHERE AccountAccount_id='$var1' AND Document_number='$var2'";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('showdoc.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('docdetelepage.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('docdetelepage.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('docdetelepage.php')</script>
    
        <?php
        
    }
?>