<?php

$connection = mysqli_connect('whserver.tptlive.ee', 'cpses_tpo1bdxc6u', '', 'tpqaqkwg_voting_system');

if (!$connection) {
    die(mysqli_error($connection));
}