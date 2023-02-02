<?php
session_start();
$data = $_SESSION['data'];
if ($_SESSION['status'] == 1) {
    $status = '<b class="text-cuccess">Voted</b>';
} else {
    $status = '<b class="text-danger">Not Voted</b>';
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Voting SystemDashboard</title>
</head>

<body class="bg-secondary text-light">
    <div class="container my-5">
        <a href="../"><button class="btn btn-dark text-light px-3">Back</button></a>
        <a href="logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a>
        <h1 class="my-3">Voting Dashboard System</h1>
        <div class="row my-5">
            <div class="col-md-7">
                <?php
                if (isset($_SESSION['groups'])) {
                    $groups = $_SESSION['groups'];
                    for ($i = 0; $i < count($groups); $i++) {
                ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="../uploads/<?php echo $groups[$i]['photo'] ?>" alt="Group Image">
                    </div>
                    <div class="col-md-8">
                        <strong class="text-dark h5">Group name:</strong><?php echo $groups[$i]['username'] ?>
                        <br>
                        <strong class="text-dark h5">Votes:</strong><?php echo $groups[$i]['votes'] ?>
                        <br>
                    </div>
                </div>
                <hr>
                <form action="../actions/voting.php" method="POST">
                    <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes'] ?>">
                    <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id'] ?>">
                </form>
                <?php
                    }
                }
                ?>
            </div>
            <div class="col-md-5">
                <!-- user profile -->
                <img src="../uploads/<?php echo $data['photo'] ?>" alt="User Image">
                <br>
                <br>
                <strong class="text-dark h5">Name : </strong><?php echo $data['username']; ?><br><br>
                <strong class="text-dark h5">Mobile : </strong><?php echo $data['mobile']; ?><br><br>
                <strong class="text-dark h5">Status : </strong><?php echo $status; ?><br><br>

            </div>
        </div>
    </div>
</body>

</html>