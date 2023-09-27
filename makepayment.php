<?php
   
    if(isset($_POST['pid']) &&isset($_POST['ps']) && isset($_POST['pa']) && isset($_POST['pd']) && isset($_POST['pn']) && !empty($_POST['pid'])&& !empty($_POST['pd']) && !empty($_POST['pa']) && !empty($_POST['pd']) && !empty($_POST['pn']) ){
        
        $var1=$_POST['pid'];
		$var2=$_POST['ps'];
        $var3=$_POST['pa'];
     
		$var4=$_POST['pd'];
        $var5=$_POST['pn'];
		   
        try{
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="INSERT INTO payemnt(AccountAccount_id,serial_number,Payemnt_amount,Payment_date,card_number) VALUES('$var1','$var2','$var3','$var4','$var5')";
            
            try{
              
                $dbcon->exec($query);
                
                ?>
                    <script>window.location.assign('paymentdetails.php')</script>
                <?php
            }
            catch(PDOException $ex){
               
                ?>
                    <script>window.location.assign('newpayment.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('newpayment.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('newpayment.php')</script>
    
        <?php
        
    }
?>



