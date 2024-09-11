<?php

function router($controller, $action)
{
    $controllerFile = 'app/controllers/' . $controller . '.php';

    if (file_exists($controllerFile)) {
        require $controllerFile;
    } else {
        die('Controller not found.');
    }

    // Check if the function exists in the controller file
    if (function_exists($action)) {
        call_user_func($action);
    } else {
        die('Action not found.');
    }
}
