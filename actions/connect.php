<?php
session_start();
$databaseHost = 'whserver.tptlive.ee';
$databseUser = 'tpqaqkwg_root';
$databasePassword = ')nCv-H=sVnK]';
$databaseName = 'tpqaqkwg_voting_system';

$connection = mysqli_connect($databaseHost, $databaseUser, $databasePassword, $databaseName);
if (!$connection) {
    
    echo 'Something Successful';
} else {
    die(mysqli_error($connection));
}