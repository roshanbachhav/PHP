<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tell me</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            display: none;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Click</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/roshan">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "practicesql";


        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        } else {
            // echo "Connection was successful";
        }

        $sql = "INSERT INTO `phpdata` (`name`, `email`, `feedback`, `timing`) VALUES ('$name', '$email', '$desc ', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congradulation!</strong> thank you for feedback.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          
        }
        //  elseif (!$email){
        //         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //         <strong>ERROR !</strong> Check your Email address...
        //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //       </div>';
        // }
         else {
            // echo "</br>The database connection was not successful --->".mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>ERROR !</strong> for some technical problems...
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
    ?>

    <div class="container">
        <h1 class="mt-4">Contact Me</h1>
        <form action="/roshan/phptodb.php" method="post">

            <div class="mb-3 mt-4">
                <label for="name" class="form-label">Name</label>
                <input type="name" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3 mt-4">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 mt-4">
                <label for="desc" class="form-label">Feedback</label>
                <textarea class="form-control" id="desc" name="desc" rows="10" cols="30"></textarea>
            </div>
            <!-- <div class="mb-3 mt-4">
          <label for="tdate" class="form-label">Date</label>
          <input type="date" name="date" class="form-control" id="date">
        </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>
</html>