<?php

require 'connect.php';

function sendAuthError()
{
    header("WWW-Authenticate: Basic realm=\"Private area\"");
    header("HTTP/1.0 401 Anauthorized");
    print "Sorry, you need proper credentials";
    exit();
}

function runApi($connect, $uri, $method)
{

    if ($uri === 'books' && $method === 'GET') {
        getBooks($connect);
    } else {
        sendResponse404();
    }
}

function getBooks($connect)
{
    $books = mysqli_query($connect, "SELECT * FROM `books`");
    $booksList = [];
    while ($book = mysqli_fetch_assoc($books)) {
        $booksList[] = $book;
    }
    echo json_encode($booksList);
}

function sendResponse404()
{
    http_response_code('404');
    $res = [
        'status' => false,
        'message' => 'Invalid request'
    ];
    echo json_encode($res);
}