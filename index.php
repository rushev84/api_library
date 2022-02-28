<?php

require 'connect.php';
require 'functions.php';

if (($_SERVER['PHP_AUTH_USER'] == 'user' && ($_SERVER['PHP_AUTH_PW'] == '123'))) {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    header('Access-Control-Allow-Methods: *');
    header('Access-Control-Allow-Credentials: true');
    header('Content-type: json/application');

    $uri = $_GET['q'];
    $method = $_SERVER['REQUEST_METHOD'];

    if ($uri === null && $method === 'GET') {
        echo 'Welcome to API "Library"!';
    } else {
        runApi($connect, $uri, $method);
    }
} else {
    sendAuthError();
}