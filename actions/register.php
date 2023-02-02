<?php

include('connect.php');


$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$std = $_POST['std'];

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$errors = array();


if (empty($username) or empty($mobile) or empty($password) or empty($cpassword)) {
    array_push($errors, "All fields are required");
}
if (strlen($password) < 8) {
    array_push($errors, "Password must be at least 8 charactes long");
}
if ($password !== $cpassword) {
    array_push($errors, "Password does not match");
}
require_once "database/database.php";
$sql = "SELECT * FROM userdata WHERE username = '$username'";
$resultat = mysqli_query($connection, $sql);
$rowCount = mysqli_num_rows($resultat);
if ($rowCount > 0) {
    array_push($errors, "Username already exists!");
}
if (count($errors) > 0) {
    foreach ($errors as  $error) {
        echo "<div class='alert alert-danger'>$error</div>";
    }
} else {
    move_uploaded_file($tmp_name, "../uploads/$image");
    $sql = "insert into `userdata` (username,mobile,password,photo,standard,status,votes) values ('$username','$mobile','$password','$image','$std',0,0)";
    $result = mysqli_query($connection, $sql);


    if ($result) {
        echo "<div class='alert alert-success'>You are registered successfully.</div>";
        echo '<script>
        window.location="../";
        </script>';
    } else {
        die(mysqli_error($connection));
    }
}