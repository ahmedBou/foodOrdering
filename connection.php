<?php

// output buffering
ob_start();
session_start();

$timezone = date_default_timezone_set("Africa/Casablanca");


$pdo = new PDO('mysql:host=localhost; port=3306; dbname=foodordering', 'root','root');

// see the error folder for more detail
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>