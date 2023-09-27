<?php
   
    if(isset($_POST['cid'])&& isset($_POST['actype']) && isset($_POST['ad']) && isset($_POST['cardtype']) && isset($_POST['aci'])&& !empty($_POST['cid']) && !empty($_POST['actype']) && !empty($_POST['ad']) && !empty($_POST['cardtype']) && !empty($_POST['aci']) ){
        $var1=$_POST['cid'];
        $var2=$_POST['actype'];
        $var3=$_POST['ad'];
        
		$var4=$_POST['cardtype'];
        $var5=$_POST['aci'];
		   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="INSERT INTO account(Account_type,Date_opened,Customerscustomer_id,paymentmethod,Card_information) VALUES('$var2','$var3','$var1','$var4','$var5')";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('accountdetails.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('multiplesub.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('multiplesub.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('multiplesub.php')</script>
    
        <?php
        
    }
?>