<?php 
session_start();
echo "working fine"
?>
<html>
    <head></head>
    <body>
        <p>welcome <?php echo $_SESSION['loggedinuser']; ?></p>
        <p>hello <?php echo $_SESSION['loggedinemail']; ?> </p>
    </body>
</html>