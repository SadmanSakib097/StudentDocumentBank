<?php
    session_start();

    if(isset($_SESSION['empemail']) && !empty($_SESSION['empemail'])){
        ?>

        <!DOCTYPE html> <!-- html comment: html version 5 -->
        <html>
            <head>
                <!--meta information-->
                <meta charset="utf-8">
                <title>Documents Upload</title>
            </head>

            <body>
			<h1>Document Upload</h1>
                <form action="docuploadprocess.php" method="post" enctype="multipart/form-data">
                    Account ID <input type="number" name="da"><br><br>
                    Document Number <input type="number" name="dn"><br><br>
                    Document Details: <input type="text" name="dd"><br><br>
					
                    Document Image: <input type="file" name="dimage"><br><br>

                    <input type="submit" value="Upload">
                </form>
                
                <br>
				<br>
				
		   <button onclick="window.location.href='emphomepage.php';">Back to Homepage</button>
            </body>
        </html>
    <?php
    }
    else{
        ?>
            <script>
                window.location.assign('emplogin.php');
            </script>
        <?php
    }