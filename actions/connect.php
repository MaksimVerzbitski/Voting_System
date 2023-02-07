<?php
/* $servername = "whserver.tptlive.ee";
$database = "tpqaqkwg_voting_system";
$username = "tpqaqkwg_user";
$password = "-qzW3;3F3#.u"; */

$servername = "localhost";
$database = "voting_system";
$username = "root";
$password = "";
// Create connection
$connection = new mysqli($servername, $username, $password, $database);
// Check connection
if ($connection->connect_error) {
    echo "Connection failed: " . $connection->connect_error;
} else {
    //echo "Connected successfully";
}
