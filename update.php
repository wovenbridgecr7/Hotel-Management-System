 <?php
session_start();
include 'connection.php';

$username = $_POST['username'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysqli_query($conn,"SELECT password FROM userinfo WHERE 
username='$username'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!= mysqli_num_rows($result))
        {
        echo "";
        }
        if($newpassword=$confirmnewpassword)
        $sql=mysqli_query($conn,"UPDATE userinfo SET password='$newpassword' where 

 username='$username'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }
      ?>