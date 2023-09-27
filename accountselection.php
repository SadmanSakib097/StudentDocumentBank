<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }

</style>


 <center><h2><b><i>Personal Details</i></b></h2> </center>

<?php
    session_start();

    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
		
        ?>
 <center>
<table>
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>Mobile Number</th>
                        <th>Address</th>
                        <th>Email</th>
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
                                $sqlquery="SELECT * FROM customers where Email='$searchval'";
                            }
						   
						   
                           
                            
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $customerstable=$returnval->fetchAll();
                                
                                foreach($customerstable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['customer_id'] ?></td>   
                                            <td><?php echo $row['Name'] ?></td>   
                                            <td><?php echo $row['Mobile_number'] ?></td>   
                                            <td><?php echo $row['Address'] ?></td>
                                            <td><?php echo $row['Email'] ?></td>
                                         
                                        </tr>
                                    <?php
                                }
                            }
                            catch(PDOException $ex){
                                ?>
                                    <tr>
                                        <td colspan="5">Data read error ... ...</td>    
                                    </tr>
                                <?php
                            }
                            
                        }
                        catch(PDOException $ex){
                            ?>
                                <tr>
                                    <td colspan="5">Data read error ... ...</td>    
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
			</center>
					<br>
           <br>
<br>	
	
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

<center>

<h2><b><i>Subscription type Details</i></b></h2>



<table>
                <thead>
                    <tr>
                        <th>Package</th>
                        <th>Amount</th>
						<th>Document Limit</th>
                        
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
                                $sqlquery="SELECT * FROM sub_type ";
                            }
						   
						   
                           
                            
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $customerstable=$returnval->fetchAll();
                                
                                foreach($customerstable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['package'] ?></td>   
                                            <td><?php echo $row['amount'] ?></td>   
                                            <td><?php echo $row['number_of_documents'] ?></td> 
                                         
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


</center>








<!DOCTYPE html> 
<html>
    <head>
        
        <meta charset="utf-8">
        <title>Account selection</title>
		<style>
            body { 
            background: Gray; 
          }
        </style>
		
    </head>
    
    <body>
	  <center>
	     

         
		<br>
		<br>
		<br>

              <form action="inaccount.php" method="post">
                <h3>SELECT YOUR ACCOUNT INFORMATION</h3>
				
				Customer ID:<br><input type="text" placeholder="Enter your Customer ID "  name="cid"><br><br>
				
				<select name="actype">
                    
                    <option value="Monthly">Monthly</option>
					<option value="3 month package">3 month package</option>
					<option value="6 month package">6 month package</option>
                    <option value="Yearly">Yearly</option>
                    
                </select>
				Account Opening Date: <br><input type="date" name="ad"><br><br>
				
				
				 <select name="cardtype">
                    
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="E wallet">E wallet</option>
                    
                </select>
				
				
				Card Information:<br><input type="text" placeholder="Enter your Card details"  name="aci"><br><br>
				
				  <input type="submit" value="DONE">
				
				
				
                





</center>

    </body>
</html>