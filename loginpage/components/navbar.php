<?php
$loggedin = false;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
}
else{
    $loggedin = false;
}
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="/loginpage">RV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/loginpage/index.php">Home</a>
                    </li>';
                    if(!$loggedin){
                        echo '
                    <li class="nav-item">
                        <a class="nav-link" href="/loginpage/signup.php">sign up</a>
                    </li>';
                        echo '<li class="nav-item">
                            <a class="nav-link" href="/loginpage/login.php">login</a>
                        </li>';
                    }
                    if($loggedin){
                        echo '<li class="nav-item">
                            <a class="nav-link" href="/loginpage/logout.php">Logout</a>
                        </li>';
                    }
            echo '</div>
        </div>
    </nav>
</body>
</html>';

?>