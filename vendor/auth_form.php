<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authorization</title>
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>

<form action="signin.php" method="post">
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

</body>
</html>