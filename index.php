<?php
session_start();
// connect to the sql database
include 'functions.php';
$pdo = pdo_connect_mysql();

// Page is set to home by default
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
include $page . '.php';
?>