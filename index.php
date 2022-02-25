<?php
session_start();
if($_SESSION['user']){
    header('Location: profile.php');
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authorization</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<form action="vendor/signin.php" method="post">
    <label for="">Login</label>
    <input type="text" name="login" placeholder="Enter login">
    <label for="">Password</label>
    <input type="password" name="password" placeholder="Enter password">
    <button type="submit">Sign in</button>
    <?php
    if ($_SESSION['message']) {
        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
</form>


<?php

require 'vendor/connect.php';
require 'api.php';

$uri = $_GET['q'];
$method = $_SERVER['REQUEST_METHOD'];

if ($uri === null && $method === 'GET') {
    echo 'Welcome to API "Library"!';
} else {
    runApi($connect, $uri, $method);
}

?>

</body>
</html>


