<style>
    table, th, td{
        border: 2px solid black;
        border-collapse: collapse;
        text-align: center;
    }

</style>


<h2><b><i>Personal Details</i></b></h2>

<?php
    session_start();

    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
		
        ?>

<table>
                <thead>
                    <tr>
                        <th>ID</th>
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
			
			
			
		   <br>
           <br>
           <br>	
	       <a href="updatepass.php"><b>Change Password</b></a>
           <br>
		  <br>
			
			
			
			
			
			
			
					<br>
           <br>
<br>	
	<a href="homepage.php"><b>HOMEPAGE</b></a>
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
		
		
		
		
		
		
		
		
		
		
			
			
			
			
			
			