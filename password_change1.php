<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: loginhome.php"); // Redirecting To Home Page
}
?>
<html>
     <head>
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="stylining4.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Operations</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     </head>
    <body>
	<div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
       <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>-->
        <strong id="linkmod">WOVEN PICKED</strong>
      </a>
        <a href="output_table.php" class="navbar-brand d-flex align-items-center">
            <strong>Hotels</strong>
        </a>
	<a href="output.php" class="navbar-brand d-flex align-items-center">
            <strong>User Details</strong>
        </a>
        
        
        
        
        
        
        
        
        
      <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>-->
    </div>
  </div>
	<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
	<div id="is">
    <h2>Change Password</h2>
   <form method="POST" action="update.php">
    <table>
    <tr>
   <td>Enter your UserName</td>
    <td><input type="text" size="10" name="username" class="form-control"></td>
    </tr>
    <tr>
    <td>Enter your existing password:</td>
    <td><input type="password" size="10" name="password" class="form-control"></td>
    </tr>
  <tr>
    <td>Enter your new password:</td>
    <td><input type="password" size="10" name="newpassword" class="form-control"></td>
    </tr>
    <tr>
   <td>Re-enter your new password:</td>
   <td><input type="password" size="10" name="confirmnewpassword" class="form-control"></td>
    </tr>
    </table>
<br>
    <p><input type="submit" value="Update Password" class="btn btn-primary" id="vamo">
    </form>
</div>


	<div id="this">
	<h2> Delete Record</h2>
	<form method="POST" action="deleterecord.php">
	 <table>
    <tr>
   <td>Enter your UserName</td>
    <td><input type="text" size="10" name="username" class="form-control"></td>
    </tr>
    <tr>
    <td><input type="submit" size="10" value="delete record" class="btn btn-primary" id="real"></td>
    </tr>
	</table>
	
	
	
	</form>
	</div>
	<footer class="text-muted" id="test">
    
  <div class="container" id="importy">
    <p class="float-right" id="newmat">
      CONTACT : 8279912542
    </p>
    <p id="newmat">web-site &copy;  kashish upadhyay</p>
   <!-- <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.3/getting-started/introduction/">getting started guide</a>.</p>-->
  </div>
    
</footer>
	
  
   </body>
    </html>