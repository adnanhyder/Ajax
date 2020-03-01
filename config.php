<?php
/**
 * Created by PhpStorm.
 * User: Adnan
 * Date: 2/27/2020
 * Time: 8:31 PM
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


