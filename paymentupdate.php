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
            <h2><u><i>Payments</i></u></h2>
            
            <table>
                <thead>
                    <tr>
                        <th>Serial number</th>
                        <th>Account ID</th>
                        <th>Amount</th>
                        <th>Payment date</th>					                       
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            $sqlquery="SELECT serial_number,AccountAccount_id,Payemnt_amount,Payment_date FROM Payemnt";
                            
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $custtable=$returnval->fetchAll();
                                
                                foreach($custtable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['serial_number'] ?></td>   
                                            <td><?php echo $row['AccountAccount_id'] ?></td>   
                                            <td><?php echo $row['Payemnt_amount'] ?></td>   
                                            <td><?php echo $row['Payment_date'] ?></td> 
											 											
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