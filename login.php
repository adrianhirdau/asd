<?php

function redirect($path = '/')
{
    header("Location: $path");
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_POST['logout']) {
    $_SESSION['auth'] = null;
    $_SESSION['message'] = 'Successfully logged out';
    redirect();
}

$email = "admin@gmail.com";
$password = "00012345";

// todo: why doesn't it work?
if (!in_array('e-mail', $_POST)) {
    die('Forgot anything?');
}

// todo: why do multiple passwords work?
if ($_POST['email'] != $email && $_POST['password'] != $password) {
    die('Invalid credentials');
}

$_SESSION['auth'] = 'logged';
$_SESSION['message'] = 'Successfully logged in';
redirect();