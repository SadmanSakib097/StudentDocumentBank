<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    
 
</style>



<h2><b><i>Payment Details</i></b></h2>

<?php
    session_start();

    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
		
        ?>

<table>
                <thead>
                    <tr>
                        <th>Serial Number</th>
                        <th>Payment Amount</th>
                        <th>Payment Date</th>
						<th>Card Number</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        try{
                            ///php-mysql 3 way. We will use PDO - PHP data object
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						   
						   $searchval=$_SESSION['useremail'];
                            $sqlquery="";
                            if(!empty($searchval)){
                                $sqlquery="SELECT * FROM account AS a JOIN customers AS c ON a.Customerscustomer_id=c.customer_id JOIN payemnt AS p ON p.AccountAccount_id=a.Account_id where Email='$searchval'";
                            }
						   
						   
                           
                            
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $paymenttable=$returnval->fetchAll();
                                
                                foreach($paymenttable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['serial_number'] ?></td>   
                                            <td><?php echo $row['Payemnt_amount'] ?></td>   
                                            <td><?php echo $row['Payment_date'] ?></td>   
                                            <td><?php echo $row['card_number'] ?></td>
                                            
                                         
                                        </tr>
                                    <?php
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                    <tr>
                                        <td colspan="4">Data read error ... ...</td>    
                                    </tr>
                                <?php
                            }
                            
                        }
                        catch(PDOException $ex){
                            ?>
                                <tr>
                                    <td colspan="4">Data read error ... ...</td>    
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
			
			<br>
<br>	
	<a href="homepage.php"><b>HOMEPAGE</b></a>
<br>
<br>	
			
		<a href="newpayment.php"><b>MAKE NEW PAYMENTS</b></a>
<br>
<br>	
			
			
<br>
            
            <input type="button" value="Logout" id="logoutbtn">

            <script>
                var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click', processlogout);
                
                function processlogout(){
                    window.location.assign('logoutprocess.php');
                }
                
            </script>			
			  
		 
       
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
		
		
		
		
		
		
		
		
		
		
			
			
			
			
			
			