<?php
include 'components/dbconn.php';


$exists = false;
$login = false;
$login_feild = false;


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: welcome.php");
            } else {
                $login_feild = true;
            }
        }

    } else {
        $login_feild = true;
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
    if ($login)
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Login successful</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    if ($login_feild)
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oops Something went wrong...! </strong>please enter valid username and password.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    ?>
    <div class="container my-5">
        <h1 class="text-center">Welcome to Login page</h1>
        <form action="/loginpage/login.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp"
                    placeholder="Enter first name">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <div id="emailHelp" class="form-text">Please enter strong password</div>
            </div>
            <button type="submit" class="btn btn-primary">login</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>