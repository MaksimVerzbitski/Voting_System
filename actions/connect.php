<?php

$connection = mysqli_connect('whserver.tptlive.ee', 'tpqaqkwg_root', ')nCv-H=sVnK]', 'tpqaqkwg_voting_system');
if (!$connection) {

    echo 'Error in connection... check mysqli_connect(?, ?, ?, ?)';
} else {
    die(mysqli_error($connection));
}