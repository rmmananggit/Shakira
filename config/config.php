<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "faculty";

$con = mysqli_connect("$host", "$username", "$password", "$database");

if(!$con)
{
    // header("Location: .../error/error.php");
    die();
}

?>

