<?php
session_start();
include('connect.php');

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$std = $_POST['std'];

if (empty($username) || empty($mobile) || empty($password) || empty($std)) {
    echo '<script>
    alert("All fields are required. Please fill in all the fields.");
    window.location="../";
    </script>';
    exit;
}

if (strlen($password) < 8) {
    echo '<script>
    alert("Password must be at least 8 characters long.");
    window.location="../";
    </script>';
    exit;
}

$sql = "SELECT * FROM `userdata` WHERE username='$username' AND mobile='$mobile' AND password='$password' AND standard='$std'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    $sql = "SELECT username, photo, votes, id FROM `userdata` WHERE standard='group'";
    $resultgroup = mysqli_query($connection, $sql);
    if (mysqli_num_rows($resultgroup) > 0) {
        $groups = mysqli_fetch_all($resultgroup, MYSQLI_ASSOC);
        $_SESSION['groups'] = $groups;
    }

    $data = mysqli_fetch_array($result);
    $_SESSION['id'] = $data['id'];
    $_SESSION['status'] = $data['status'];
    $_SESSION['data'] = $data;

    echo '<script>
    window.location="../partials/dashboard.php";
    </script>';
} else {
    echo '<script>
    alert("Invalid username or password. Please try again.");
    window.location="../";
    </script>';
}

/* 
session_start();
include('connect.php');

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$std = $_POST['std'];

$error = "";

if (empty($username) || empty($mobile) || empty($password) || empty($std)) {
    $error = "All fields are required. Please fill in all the fields.";
} elseif (strlen($password) < 8) {
    $error = "Password must be at least 8 characters long.";
} else {
    $sql = "SELECT * FROM `userdata` WHERE username='$username' AND mobile='$mobile' AND password='$password' AND standard='$std'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_array($result);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;

        header("Location: ../partials/dashboard.php");
        exit;
    } else {
        $error = "Invalid username or password. Please try again.";
    }
}

if (!empty($error)) {
    echo "<p style='color: red;'>" . $error . "</p>";
}

*/