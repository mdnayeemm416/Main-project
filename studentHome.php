<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>
    <h1 style="text-align: center;margin-top:5rem">Welocme <?php echo ($_SESSION['uid']); ?> </h1>
    <a href="php/logout.php">Logout</a>
</body>

</html>