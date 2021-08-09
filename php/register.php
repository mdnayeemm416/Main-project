<?php

if (isset($_POST['submit'])) {
    include "includes/db_connect.inc.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uid = validate($_POST['uid']);
    $department = validate($_POST['department']);
    $createpass = validate($_POST['createpass']);
    $psw = validate($_POST['psw']);
    $pswNew = password_hash($psw, PASSWORD_BCRYPT);

    if ($createpass == $psw) {
        $sqlUserCheck = "SELECT uid FROM register WHERE uid = '$uid';";
        $result = mysqli_query($conn, $sqlUserCheck);
        if (mysqli_num_rows($result) > 0) {
            echo '<script> alert("User Already Exist");
            window.location.href="../login.php";
            </script>';
        } else {
            $sql = "INSERT INTO register(uid, department, password) 
               VALUES('$uid','$department', '$pswNew')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<script>
                alert("Successfully Created");
                window.location.href="login.php";
                </script>';
            } else {
                echo '<script> alert("Something Went Wrong");
            window.location.href="../login.php";
            </script>';
            }
        }
    } else {
        echo '<script> alert("Password Does Not Match");
            window.location.href="../login.php";
            </script>';
    }
}
