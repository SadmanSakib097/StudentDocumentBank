<?php
    
    session_start();

    unset($_SESSION['useremail']);
    session_destroy();
	 

    echo "<script>window.location.assign('loginpage2.php');</script>";
?>