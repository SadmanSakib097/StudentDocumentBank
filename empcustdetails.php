<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    
    tr:hover{
        background-color: LightSalmon;
    }
</style>


<?php
    session_start();

    if(isset($_SESSION['empemail']) && !empty($_SESSION['empemail'])){
        ?>
            
            <br>
            <h2><u><i>CUSTOMER DETAILS</i></u></h2>
            
            <table>
                <thead>
                    <tr>
                        <th>Customer_id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile_number</th>
						<th>Customer Address</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            $sqlquery="SELECT customer_id,Name,Email,Mobile_number,Address FROM customers";
                            
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $custtable=$returnval->fetchAll();
                                
                                foreach($custtable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['customer_id'] ?></td>   
                                            <td><?php echo $row['Name'] ?></td>   
                                            <td><?php echo $row['Email'] ?></td>   
                                            <td><?php echo $row['Mobile_number'] ?></td> 
											<td><?php echo $row['Address'] ?></td>   											
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
		   <button onclick="window.location.href='emphomepage.php';">Back to Homepage</button>
		    
			<br>
           <br>
            <input type="button" value="Logout" id="logoutbtn">

            <script>
               var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click', processlogout);
                
                function processlogout(){
                    window.location.assign('emplogout.php');
                }
                
            </script>

        <?php
    }
    else{
        
        ?>
            <script>
                window.location.assign('emplogin.php');
            </script>
        <?php
    }
?>