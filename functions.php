<?php

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