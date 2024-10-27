<?php
session_start();

// Unset session variables
unset($_SESSION['auth']);
unset($_SESSION['user_type']);
unset($_SESSION['auth_user']);

// Redirect to index.php within the Shakira folder
header("Location: /Shakira/index.php");
exit(0);
?>
