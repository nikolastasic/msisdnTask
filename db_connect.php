<?php
/**
 * Created by PhpStorm.
 * User: Nikola Stašić
 * Date: 7/20/2017
 * Time: 5:14 PM
 */

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "msisdntask";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}