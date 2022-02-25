<?php

session_start();
require 'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        'login' => $user['login']
    ];

    header('Location: ../profile.php');
} else {
    $_SESSION['message'] = 'Incorrect login or password';
    header('Location: auth_form.php');
};
