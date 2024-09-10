<?php

include_once 'app/config/session.php';

$path = isset($_GET['path']) ? $_GET['path'] : '';


//sanitize the path
$filtered_path = preg_replace('/[^a-zA-Z0-9_\/]/', '', $path);

$base_dir = 'public/';

if ($filtered_path === '') {
    $filtered_path = 'index';
}

$file = realpath($base_dir . 'pages/' . $filtered_path . '.php');


// Check if the file exists and ensure it is within the base directory
if ($file && strpos($file, realpath($base_dir . 'pages')) === 0) {
    include $file;
} else {
    http_response_code(404);
    include $base_dir . '404.php';
}
