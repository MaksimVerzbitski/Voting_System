<?php

session_start();
include('connect.php');

$votes = $_POST['groupvotes'];
$totalvotes = $votes + 1;

$gid = $_POST['groupid'];
$uid = $_SESSION['id'];


$updatevotes = mysqli_query($connection, "update  `userdata` set votes='$totalvotes' where id='$gid'");
$updatestatus = mysqli_query($connection, "update `userdata` set status=1 where id='$uid'");

if ($updatevotes and $updatestatus) {
    $getgroups = mysqli_query($connection, "Select username, photo, votes, id from `userdata` where standard='group'");
    $groups = mysqli_fetch_all($getgroups, MYSQLI_ASSOC);
    $_SESSION['groups'] = $groups;
    $_SESSION['status'] = 1;
    echo '<script>
    alert("Voting successful");
    window.location="../partials/dashboard.php";
    
    </script>';
} else if (!isset($updatevotes) || $updatevotes == '') {
    echo
    '<script>You have already Voted... Procede to logout or exit app
    window.location="../partials/dashboard.php";
    </script>';
} else {
    echo "Connection failed: " . $connection->connect_error;
    echo '<script>
    alert("Technical error !! Vote after sometime");
    window.location="../partials/dashboard.php";
    
    </script>';
}