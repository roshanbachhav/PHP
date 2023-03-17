<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome - <?php echo $_SESSION['username'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <?php
    require 'components/navbar.php';
    ?>
    <div class="container my-5">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Hello <?php echo $_SESSION['username'] ?>!</h4>
            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a
                bit longer so that you can see how spacing within an alert works with this kind of content.
            </p>
            
            <hr>
            <p class="mb-0">Whenever you need to, be logout when click this <a href="/loginpage/logout.php">Use to me</a>.
            </p>
        </div>
    </div>
    <!-- <h1>Hello</h1> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>