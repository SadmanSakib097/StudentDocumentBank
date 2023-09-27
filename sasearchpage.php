<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }

</style>
<?php

    session_start();

    if(isset($_SESSION['saemail']) && !empty($_SESSION['saemail'])){

        if(isset($_GET['param1']) && !empty($_GET['param1'])){
        ?> 
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
                            
                            
                            $searchval=$_GET['param1'];
                            $sqlquery="";
                            if(!empty($searchval)){
                                $sqlquery="SELECT employee_id,Name,Email,Mobile_number FROM employee where employee_id LIKE '$searchval'";
                            }
                            
                            
                            try{
                                $returnval=$dbcon->query($sqlquery);
                                
                                $productstable=$returnval->fetchAll();
                                
                                foreach($productstable as $row){
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
            <a href="empdetails.php">BACK TO EMPOLYEE DETAILS</a>
        <?php  
        }
        else{
            ?>
                <script>
                    window.location.assign('empdetails.php');
                </script>
            <?php
        }
    }
    else{
        ?>
            <script>
                window.location.assign('superadminlogin.php');
            </script>
        <?php
    }

?>