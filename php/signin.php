<?php
session_start();
if (isset($_POST['login'])) {
    include("includes/db_connect.inc.php");

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_POST['id']);
    $pass = validate($_POST['pass']);

    $sql = mysqli_query($conn, "SELECT * FROM register WHERE uid='$id' ");
    $rows = mysqli_num_rows($sql);
    while ($row = mysqli_fetch_assoc($sql)) {
        $uPassInDB = $row['password'];
        if (password_verify($pass, $uPassInDB)) {

            $_SESSION['uid'] = $id;
            header("Location: ../studentHome.php");
        } else {
            echo "<script> alert('Invalid Credentials')</script>";
        }
        mysqli_close($conn);
    }
}
