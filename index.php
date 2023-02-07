<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/style.css">
    <title>PHP voting system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System</h1>
    <div class="bg-info py-2">
        <h2 class="text-center py-3">Login</h2>
        <div class="container text-center">
            <form action="./actions/login.php" method="POST">

                <div class="mb-3">
                    <input type="text" class="form-control w-75 m-auto" name="username"
                        placeholder="Enter your username: " required="required">

                </div>
                <div class="mb-3">

                    <input type="text" class="form-control w-75 m-auto" name="mobile"
                        placeholder="Enter your mobile number: " required="required" maxlength="10" minlength="10">
                </div>
                <div class="mb-3">

                    <input type="password" class="form-control w-75 m-auto" name="password"
                        placeholder="Enter your password: " required="required">

                </div>
                <div class="mb-3">

                    <select name="std" class="form-select w-75 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                    <button type="submit" class="btn btn-dark my-4">Login</button>
                    <p>Don't have an account <a href="./partials/registration.php" class="text-white">Register here</a>
                    </p>
            </form>
        </div>
    </div>


    <script src="" async defer></script>
</body>

</html>