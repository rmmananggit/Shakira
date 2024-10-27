<?php
session_start();
include('../config/config.php');

if (isset($_POST['login'])) {
    $emailAddress = mysqli_real_escape_string($con, $_POST['emailAddress']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "
        SELECT
            employee.userId,
            employee.firstName, 
            employee.middleName, 
            employee.lastName, 
            employee.profilePicture, 
            employee.password, 
            employee.emailAddress, 
            employee.userStatus, 
            employee.`timeStamp`,
            GROUP_CONCAT(employee_role.role_id) AS roles
        FROM
            employee
        LEFT JOIN
            employee_role ON employee.userId = employee_role.employee_id
        WHERE
            employee.emailAddress = '$emailAddress' AND
            employee.`password` = '$password'
        GROUP BY
            employee.userId
        LIMIT 1";

    $login_query_run = mysqli_query($con, $login_query);

    if ($login_query_run) {
        if (mysqli_num_rows($login_query_run) > 0) {
            $data = mysqli_fetch_assoc($login_query_run);

            $userId = $data['userId'];
            $fullName = $data['firstName'] . ' ' . $data['lastName'];
            $userEmailAddress = $data['emailAddress'];
            $userStatus = $data['userStatus'];
            $userRole = $data['roles']; 

            $_SESSION['auth'] = true;
            $_SESSION['userRole'] = $userRole;
            $_SESSION['userStatus'] = $userStatus;
            $_SESSION['auth_user'] = [
                'userId' => $userId,
                'fullName' => $fullName,
                'userEmail' => $userEmailAddress,
            ];

            if ($userStatus == 'Inactive') {
                $_SESSION['status'] = "Your account is inactive!";
                $_SESSION['status_code'] = "warning";
                header("Location: ../index.php");
                exit();
            } elseif ($userStatus == 'Pending') {
                $_SESSION['status'] = "Your account is still pending";
                $_SESSION['status_code'] = "info";
                header("Location: ../index.php");
                exit();
            } elseif ($userStatus == 'Active') {
                $_SESSION['status'] = "Welcome $fullName!";
                $_SESSION['status_code'] = "success";

                // Role-based redirection
                if (strpos($userRole, '1') !== false) {
                    header("Location: ../admin/index.php");
                } elseif (strpos($userRole, '2') !== false) {
                    header("Location: ../hr/index.php");
                } elseif (strpos($userRole, '3') !== false) {
                    header("Location: ../faculty/index.php");
                } elseif (strpos($userRole, '4') !== false) {
                    header("Location: ../staff/index.php");
                } else {
                    header("Location: ../index.php");
                    $_SESSION['status'] = "Invalid Role";
                    $_SESSION['status_code'] = "error";
                }
                exit();
            }
        } else {
            $_SESSION['status'] = "Invalid Email Address or Password";
            $_SESSION['status_code'] = "error";
            header("Location: ../index.php");
            exit();
        }
    } else {
        // Handle the query execution error
        $_SESSION['status'] = "Error executing the login query: " . mysqli_error($con);
        $_SESSION['status_code'] = "error";
        header("Location: ../index.php");
        exit();
    }
} else {
    $_SESSION['status'] = "Invalid request";
    $_SESSION['status_code'] = "error";
    header("Location: ../index.php");
    exit();
}
?>
