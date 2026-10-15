<?php

$host = "db01.dbhost.dev";
$user = "user_4568szc9s";
$password = "p4568szc9s";
$database = "db_4568szc9s";
$port = 5051;

$conn = new mysqli($host, $user, $password, $database,$port);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>