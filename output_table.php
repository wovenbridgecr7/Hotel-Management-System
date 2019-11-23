<?php
include ('connection.php');

$query = "SELECT * FROM hotels";
$result = mysqli_query($conn,$query);

?>



<!DOCTYPE html>

<html>

    <head>
            <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="stylining2.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>mysql select</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
 <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
       <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>-->
        <strong id="linkmod">WOVEN PICKED</strong>
      </a>
        <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Hotels</strong>
        </a>
       
        
        
        
        
        
        
        
        
      <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>-->
    </div>
  </div>
        <div class="container">
            <h1>Hotels</h1>
            
                 <?php
                    if(mysqli_num_rows($result) > 0){

            echo "<table class='table table-bordered'><tr><th>hotel name</th><th>location</th><th>rooms available</th><th>price</th><th>category</th></tr>";


            while( $row = mysqli_fetch_assoc($result) ) {
                echo "<tr><td>".$row["hotel_name"]."</td><td>".$row["location"]."</td><td>".$row["rooms_available"]."</td><td>".$row["price"]."</td><td>".$row["category"]."</td></tr>";
            }
                echo "</table>";
        }
        else{
            echo "error";
        }

        mysqli_close($conn);
          ?>
            
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
        
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
