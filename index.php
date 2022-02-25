<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header('Content-type: json/application');

require 'connect.php';
require 'functions.php';

$uri = $_GET['q'];
$method = $_SERVER['REQUEST_METHOD'];

if ($uri === 'books' && $method === 'GET') {
    getBooks($connect);
} else {
    sendResponse404();
}