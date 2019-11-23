<?php
include('connection.php');

   if( isset( $_POST["submit"] ) ) {
       
       // build a function that validates data
       function validateFormData( $formData ) {
           $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
           return $formData;
       }
       
       // check to see if inputs are empty
       // create variables with form data
       // wrap the data with our function
       $username = $lname = $fname = $email = $password = $country = $state = $address ="";
       if( !$_POST["fname"] ) {
           $nameError = "Please enter your firstname <br>";
       } else {
           $fname = validateFormData( $_POST["fname"] );
       }
       
       if( !$_POST["email"] ) {
           $emailError = "Please enter your email <br>";
       } else {
           $email = validateFormData( $_POST["email"] );
       }
        if( !$_POST["lname"] ) {
           $emailError = "Please enter your lastname <br>";
       } else {
           $lname = validateFormData( $_POST["lname"] );
       }
        if( !$_POST["username"] ) {
           $emailError = "Please enter your username <br>";
       } else {
           $username = validateFormData( $_POST["username"] );
       }
        if( !$_POST["password"] ) {
           $emailError = "Please enter your password <br>";
       } else {
           $password = validateFormData( $_POST["password"] );
       }
        if( !$_POST["country"] ) {
           $emailError = "Please enter your country <br>";
       } else {
           $country = validateFormData( $_POST["country"] );
       }
        if( !$_POST["state"] ) {
           $emailError = "Please enter your state <br>";
       } else {
           $state = validateFormData( $_POST["state"] );
       }
        if( !$_POST["address"] ) {
           $emailError = "Please enter your address <br>";
       } else {
           $address = validateFormData( $_POST["address"] );
       }
       if( $username && $lname && $fname && $email && $password && $country && $state && $address){
             
       
       echo "chasl gya";
       $query = "INSERT INTO userinfo(fname,lname,username,email,address,country,state,password,id) VALUES('$fname','$lname','$username','$email','$address','$country','$state','$password',null)";
       if(mysqli_query($conn,$query)){
           echo "<div class='alert alert-success'>new record</div>";
       }
           else{
               echo "error";
           }
       }
       }


?>
            