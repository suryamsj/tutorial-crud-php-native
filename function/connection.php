<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "tutor_php";

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die(mysqli_error($connection));
}