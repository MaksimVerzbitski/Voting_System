<?php
$servername   = "whserver.tptlive.ee";
$database = "tpqaqkwg_voting_system";
$username = "cpses_tpo1bdxc6u";
$password = "";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);
// Check connection
if ($connection->connect_error) {
    echo "Connection failed: " . $connection->connect_error;
}
echo "Connected successfully";
?>