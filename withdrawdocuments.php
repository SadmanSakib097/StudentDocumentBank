<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    
 
</style>



<h2><b><i>Document Entry/withdraw Details</i></b></h2>

<?php
    session_start();

    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
		
        ?>

<table>
                <thead>
                    <tr>
					   
                        <th>Entry Date</th>
                        <th>Withdraw Date</th>
                         <th>Document Number</th>
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
                                $sqlquery="SELECT * FROM document_entrywithdraw AS dd JOIN document AS d ON dd.DocumentAccountAccount_id=d.AccountAccount_id JOIN account AS ac ON d.AccountAccount_id=ac.Account_id JOIN customers AS cc ON ac.Customerscustomer_id=cc.customer_id where Email='$searchval' GROUP BY DocumentDocument_number ";
                            }
						   
						   
                           
                            
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $wdt=$returnval->fetchAll();
                                
                                foreach($wdt    as $row){
                                    ?>
                                        <tr>
										
										       
                                            <td><?php echo $row['Entry_date'] ?></td>   
                                            <td><?php echo $row['Withdraw_date'] ?></td>   
                                            <td><?php echo $row['DocumentDocument_number'] ?></td>
                                            
                                            
                                         
                                        </tr>
                                    <?php
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                    <tr>
                                        <td colspan="3">Data read error ... ...</td>    
                                    </tr>
                                <?php
                            }
                            
                        }
                        catch(PDOException $ex){
                            ?>
                                <tr>
                                    <td colspan="3">Data read error ... ...</td>    
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
			
			
			
			
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
		
		
		
		
		
		
		
		
		
		
			
			
			
			
			
			