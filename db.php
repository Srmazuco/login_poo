<?php

session_start();
ob_start();

$host = "mysql:dbname=db_login; host=localhost";
$user = "root";
$pass= "";

try {
    $conn = new PDO($host, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

include 'class.php';

$db = new Main($conn);