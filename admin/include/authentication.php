<?php
session_start();
include('../config/config.php');

if(!isset($_SESSION['auth']))
{
    $_SESSION['status'] = "Login to access dashboard";
    $_SESSION['status_code'] = "warning";
    header("Location: /Shakira/index.php");
    exit(0);
}
// else
// {
//     if ($_SESSION['u_status'] != "2") 1 - admin 2- staff
//     {
//         $_SESSION['message'] = "You are not authorized as ADMIN";
//         header("Location: ../login.php");
//         exit(0);
//     }
// }

?>

