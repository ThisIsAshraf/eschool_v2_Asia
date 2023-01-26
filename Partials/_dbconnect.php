<?php

$hostname = "localhost";
$userName ="root";
$password="";
$databaseName="eschool";

// Create Connection
$connection = new mysqli($hostname, $userName, $password, $databaseName);

//Check the connection
if($connection -> connect_error){
    die("Failed to Connect with Database");
}else{
    // echo "Database Connection Successful";
}

?>