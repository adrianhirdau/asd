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
if (!isset($_POST['e-mail'])) {
    var_dump($_POST);
}
// todo: why do multiple passwords work?
if ($_POST['e-mail'] != $email && $_POST['password'] !== $password) {
    die('Invalid credentials');
}

$_SESSION['auth'] = 'logged';
$_SESSION['message'] = 'Successfully logged in';
redirect();
