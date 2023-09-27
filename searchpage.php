<?php

    session_start();

    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){

        if(isset($_GET['param1']) && !empty($_GET['param1'])){
        ?> 
            <table>
                <thead>
                    <tr>
                        <th>Document Number</th>
                        <th>Document Details</th>
                        <th>Document Image</th>
                 
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            $searchval=$_SESSION['useremail'];
             
            
                            $searchval1=$_GET['param1'];
                            $sqlquery="";
                            if(!empty($searchval)&& !empty($searchval1)){
							 $sqlquery="SELECT * FROM document AS d JOIN account AS a ON d.AccountAccount_id=a.Account_id JOIN customers AS c ON a.Customerscustomer_id=c.customer_id  where Document_details LIKE '%$searchval1%' && Email='$searchval'";
                               
                            }
                            
                            
                            try{
                                $returnval=$dbcon->query($sqlquery); 
                                
                                $productstable=$returnval->fetchAll();
                                
                                foreach($productstable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['Document_number'] ?></td>   
                                            <td><?php echo $row['Document_details'] ?></td>   
                                            <td>
                                            <img width="150" height="150" alt="Not Uploaded Yet" src="<?php echo $row['Document_image_path'] ?>">
                                            </td>
                                            
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
			<br>
			<br>

            <a href="documentsdeposited.php">BACK</a>
			<br>
			<br>
			<br>
            <a href="homepage.php">Home Page</a>
        <?php  
        }
        else{
            ?>
                <script>
                    window.location.assign('homepage.php');
                </script>
            <?php
        }
    }
    else{
        ?>
            <script>
                window.location.assign('loginpage.php');
            </script>
        <?php
    }

?>