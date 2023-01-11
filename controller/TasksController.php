<?php
require_once 'model/User.php';
session_start();

$username = null;


if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();
}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['username']);
    session_destroy();
}


$tasks = [
    'Погулять с собакой',
    'Починить компьютер'
];

include "view/tasks.php";