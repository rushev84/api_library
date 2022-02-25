<?php

require 'connect.php';
require 'api.php';

$uri = $_GET['q'];
$method = $_SERVER['REQUEST_METHOD'];

if ($uri === null && $method === 'GET'){
    echo 'Welcome to API "Library"!';
} else {
    runApi($connect, $uri, $method);
}