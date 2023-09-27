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

    if(isset($_SESSION['saemail']) && !empty($_SESSION['saemail'])){
        ?>
            
            <br>
            <h2><u><i>EMPLOYEE DETAILS</i></u></h2>
            <input type="search" id="searchbox">
            <input type="button" value="Search" id="searchbtn">
            <br>
            <br>
            <script>
                var srcbtn=document.getElementById('searchbtn');
                srcbtn.addEventListener('click', searchprocess);
                
                function searchprocess(){
                    var searchvalue=document.getElementById('searchbox').value;
                    window.location.assign("sasearchpage.php?param1="+searchvalue);
                }
                  
            </script>

            <table>
                <thead>
                    <tr>
                        <th>employee_id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile_number</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            $sqlquery="SELECT employee_id,Name,Email,Mobile_number FROM employee";
                            
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $emptable=$returnval->fetchAll();
                                
                                foreach($emptable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['employee_id'] ?></td>   
                                            <td><?php echo $row['Name'] ?></td>   
                                            <td><?php echo $row['Email'] ?></td>   
                                            <td><?php echo $row['Mobile_number'] ?></td>                                           
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
            <a href="empremove.php"><b>Remove any employee</b></a>
            <br>
            <br>
           <br>
		   <button onclick="window.location.href='superadminhomepage.php';">Back to Homepage</button>
		    
			<br>
           <br>
            <input type="button" value="Logout" id="logoutbtn">

            <script>
                var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click', processlogout);
                
                function processlogout(){
                    window.location.assign('logoutsuperadmin.php');
                }
                
            </script>

        <?php
    }
    else{
        
        ?>
            <script>
                window.location.assign('superadminlogin.php');
            </script>
        <?php
    }
?>