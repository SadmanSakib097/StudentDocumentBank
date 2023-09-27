<style>
    table, th, td{
        border: 1px solid blue;
        border-collapse: collapse;
        text-align: center;
    }
    
    tr:hover{
        background-color: bisque;
    }
</style>


<?php
    session_start();

    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){
        ?>
            
  
<input type="search" id="searchbox">
            <input type="button" value="Search" id="searchbtn">
            <br>
            <br>
            <script>
                var srcbtn=document.getElementById('searchbtn');
                srcbtn.addEventListener('click', searchprocess);
                
                function searchprocess(){
                    var searchvalue=document.getElementById('searchbox').value;
                    window.location.assign("searchpage.php?param1="+searchvalue);
                }
                
            </script>

            <table>
                <thead>
                    <tr>
                        <th>Document Number</th>
                        <th>Document Details</th>
                        <th>Document Image (Click on the image to download)</th>
						
                </thead>
                
                <tbody>
                    <?php
                        try{
                            
                            $dbcon = new PDO("mysql:host=localhost:3306;dbname=bankdb;","root","");
                            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
							$searchval=$_SESSION['useremail'];
                            $sqlquery="";
                            if(!empty($searchval)){
                                $sqlquery="SELECT * FROM document AS d JOIN account AS a ON d.AccountAccount_id=a.Account_id JOIN customers AS c ON a.Customerscustomer_id=c.customer_id  where Email='$searchval'";
                            }

                            try{
                                $returnval=$dbcon->query($sqlquery); 
                                
                                $productstable=$returnval->fetchAll();
                                
                                foreach($productstable as $row){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['Document_number'] ?></td>   
                                            <td><?php echo $row['Document_details'] ?></td>   
                                            
											
											<td><a href="<?php echo $row['Document_image_path'] ?>"download>
                                                <img width="150" height="150" alt="Not Uploaded Yet" src="<?php echo $row['Document_image_path'] ?>"></a>
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
<a href="homepage.php"><b>Homepage</b></a>
<br>
<br>
			
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

 <br>
            <br>
 <br>
            <br>