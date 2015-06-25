<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
        <head>  
                <title>Corvallis Reuse and Repair Directory - Administration Site</title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        </head>
        <body>
                
                <h2>Corvallis Reuse and Repair Directory - Administration Site</h2>
				
		<br/>
                <?php
                        if($_SESSION['logged_in'] == 'yes')
                        {
                		echo '<a href="view.php">View Business Records</a><br/>
                                <a href="add_biz.php">Add New Business</a><br>';
                        }
                ?>

                <?php
                        if($_SESSION['logged_in'] == 'yes' && $_SESSION['level'] == 1)
                        {
                                echo '<a href="login.php">Create a New Account</a><br>';
                        }
                ?>
                
                <?php
                        if($_SESSION['logged_in'] != 'yes')
                        {
                                echo '<a href="login.php">Log In</a><br>';
                        }
                ?>

                <?php
                        if($_SESSION['logged_in'] == 'yes')
                        {
                                echo '<a href="logout.php">Logout</a><br>';
                        }
                ?>
                
        </body>
</html>


