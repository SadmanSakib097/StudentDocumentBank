<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    
   
</style>



<h2><b><i>Account Details</i></b></h2>

<?php
    session_start();

    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
		
        ?>

<table>
                <thead>
                    <tr>
                        <th>Account ID</th>
                        <th>Account Type</th>
                        <th>Account Opening Date</th>
                        <th>Account Closing Date</th>
						<th>Payment Method</th>
						<th>Card Information</th>
						
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        try{
                         
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						   
						   $searchval=$_SESSION['useremail'];
                            $sqlquery="";
                            if(!empty($searchval)){
                                $sqlquery="SELECT * FROM account AS a JOIN customers AS c ON a.Customerscustomer_id=c.customer_id  where Email='$searchval'";
                            }
						   
						   
                           
                            
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $accounttable=$returnval->fetchAll();
                                
                                foreach($accounttable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['Account_id'] ?></td>   
                                            <td><?php echo $row['Account_type'] ?></td>   
                                            <td><?php echo $row['Date_opened'] ?></td>   
                                            <td><?php echo $row['Date_closed'] ?></td>
                                            <td><?php echo $row['paymentmethod'] ?></td>   
                                            <td><?php echo $row['Card_information'] ?></td>
											
                                         
                                        </tr>
                                    <?php
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                    <tr>
                                        <td colspan="6">Data read error ... ...</td>    
                                    </tr>
                                <?php
                            }
                            
                        }
                        catch(PDOException $ex){
                            ?>
                                <tr>
                                    <td colspan="6">Data read error ... ...</td>    
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
			
<br>
            
            <input type="button" value="Logout" id="logoutbtn">

            <script>
                var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click', processlogout);
                
                function processlogout(){
                    window.location.assign('logoutprocess.php');
                }
                
            </script>			
<br>
<br>		
<br>	
	<a href="unsubscribe.php"><b>Cancel Subscription</b></a>
<br>
<br>

<br>
<br>		
<br>	
	<a href="accountselection.php"><b>Add Subscription</b></a>
<br>
<br>




		
		 
       
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
		
		
		
		
		
		
		
		
		
		
			
			
			
			
			
			