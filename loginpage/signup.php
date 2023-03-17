<?php
include 'components/dbconn.php';

// $exist = false;
$login_succes = false;
$login_feild = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];

    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exist = true;
        echo "Username already exist";
    }
    else{
        // $exist = false;
        if (($password == $rpassword)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $login_succes = true;
                header("location: login.php");
            } else {
                echo "Password dose not match";
            }
        } else {
            $login_feild = true;
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sign-up page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <?php
    require 'components/navbar.php';
    ?>

    <?php
    if ($login_succes)
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sign in was success</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    if ($login_feild)
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Password dosent match! </strong>please enter same password.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    ?>
    <div class="container my-4">
        <h1 class="text-center">SignUp page</h1>
        <form action="/loginpage/signup.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" maxlength="10" class="form-control" id="username" name="username" aria-describedby="emailHelp"
                    placeholder="Enter first name">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" maxlength="16" name="password">
                <div id="emailHelp" class="form-text">Please enter strong password</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">confirm password</label>
                <input type="password" class="form-control" id="rpassword" maxlength="16" name="rpassword">
                <div id="emailHelp" class="form-text">Enter same password</div>
            </div>
            <button type="submit" class="btn btn-primary">sign-up</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>