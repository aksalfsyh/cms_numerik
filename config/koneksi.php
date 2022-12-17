<?php

$hostname = "localhost";
$username = "root";
$password = "root";
$database = "db_unpam_library";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
