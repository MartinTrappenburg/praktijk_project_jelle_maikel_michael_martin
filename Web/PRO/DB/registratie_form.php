<?php

if (session_status() != PHP_SESSION_ACTIVE) 
{
    session_start();
}

$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$email = $_SESSION['email'];
$date = $_SESSION['date'];


require_once 'connectdb.php';


$sql = "INSERT INTO test (voornaam, achternaam, email, geboortedatum) VALUES (?, ?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,  $sql)) 
{
    header("location: ../registratie.php?error=stmtfailed");
    exit();
}

mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $date);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

header("location: ../index.php?error=none");

exit();