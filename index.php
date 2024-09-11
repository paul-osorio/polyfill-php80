<?php

include_once 'app/config/session.php';

require 'app/core/router.php';

// Get the request URL and extract the controller/action
$url = isset($_GET['path']) ? $_GET['path'] : '';
$url = rtrim($url, '/');
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);


$controller = !empty($url[0]) ? $url[0] : 'authentication';
$action = !empty($url[1]) ? $url[1] : 'login';



// Load and route the controller
router($controller, $action);
