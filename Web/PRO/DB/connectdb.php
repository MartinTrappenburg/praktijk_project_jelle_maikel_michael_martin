<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "testdb";

// create connection
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

// check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());    
}