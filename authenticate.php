<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$error_message = '';

if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']);
}

define('ADMIN_LOGIN', 'wally');
define('ADMIN_PASSWORD', 'mypass');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    if ($username === ADMIN_LOGIN && $password === ADMIN_PASSWORD) {
        $_SESSION['authenticated'] = true;
        $_SESSION['user'] = $username;
        header('Location: homepage.php');
        exit;
    } else {
        $error_message = "Incorrect username or password.";
        $_SESSION['error_message'] = $error_message;
        header('Location: login.php');
        exit;
    }
}

?>