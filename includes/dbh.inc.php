<?php

// connecting to database

$servername = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'phplogin';

// actual connection
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}