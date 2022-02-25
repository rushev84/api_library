<?php

require 'vendor/functions.php';

function runApi($connect, $uri, $method)
{
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    header('Access-Control-Allow-Methods: *');
    header('Access-Control-Allow-Credentials: true');
    header('Content-type: json/application');

    if ($uri === 'books' && $method === 'GET') {
        getBooks($connect);
    } else {
        sendResponse404();
    }
}