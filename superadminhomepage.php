<?php
    session_start();


    if(isset($_SESSION['saemail']) && !empty($_SESSION['saemail'])){
        ?>

<center>
<h1> <b><i>Superadmin Homepage</i></b></h1>
</center>
<br>
<br>
<br>
<a href="empdetails.php"><b>Employee Details</b></a>
<br>
<br>
<a href="custdetails.php"><b>Customer Details</b></a>
<br>
<br>
<a href="empremove.php"><b>Remove any employee</b></a>
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