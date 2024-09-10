<?php


include __DIR__ . '/../controller/AuthenticationController.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $auth = new AuthenticationController();
    $user = $auth->login();

    if ($user) {
        header('Location: dashboard');
    } else {
        header('Location: login');
    }
}
