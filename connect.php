<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contactform";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO contactform_entries (firstName, lastName, email, message) VALUES ('$firstName', '$lastName', '$email', '$message')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);