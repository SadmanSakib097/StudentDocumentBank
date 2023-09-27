<?php
    session_start();

    if(isset($_SESSION['empemail']) && !empty($_SESSION['empemail'])){
        ?>
            
<center>
<h1> <b><i><u>Employee Home page</u></i></b></h1>
</center>

<br>
<br>
<br>

<a href="emppersonaldetails.php"><b>Employee Personal Details</b></a>
<br>
<br>
<a href="empupdate.php"><b>Update personal details</b></a>
<br>
<br> 
<a href="empcustdetails.php"><b>Customer Personal Details</b></a>
<br>
<br>
<a href="showdoc.php"><b>All Document</b></a>
<br>
<br>
<a href="empuploaddoc.php"><b>Customer document upload</b></a>
<br>
<br>
<a href="docdetelepage.php"><b>Customer document delete</b></a>
<br>
<br>
<a href="custpay.php"><b>Customer total payment</b></a>
<br>
<br>
<a href="custtotaldoc.php"><b>Each Account Total documents</b></a>
<br>
<br>
<a href="paymentupdate.php"><b>Payments</b></a>
<br>
<br>
 <a href="docentryorwithdraw.php"><b>Document entry/withdraw list & time</b></a>

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