<?php
/*$connection = mysqli_connect('whserver.tptlive.ee', 'tpqaqkwg_root', ')nCv-H=sVnK]', 'tpqaqkwg_voting_system');

if (!$connection) {
    die(mysqli_error($connection));
} */

// $connection = mysqli_connect("localhost","root","","voting_system");


$databaseHost = 'whserver.tptlive.ee';
$databseUser = 'tpqaqkwg_root';
$databasePassword = ')nCv-H=sVnK]';
$databaseName = 'tpqaqkwg_voting_system';

$connection = mysqli_connect($databaseHost, $databaseUser, $databasePassword, $databaseName);
if (!$connection) {
    die(mysqli_error($connection));
}