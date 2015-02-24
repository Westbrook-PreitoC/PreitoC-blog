<link type="text/css" rel="stylesheet" href="dist/css/bootstrap-theme.css">
<link type="text/css" rel="stylesheet" href="dist/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="style.css">


<div class="container">
    <div class="jumbotron">

        <h1>Hello This is My Home Page</h1>
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="login.php">Login</a></li>
            <li role="presentation"><a href="register.php">Register</a></li>
        </ul>
    </div>
</div>

<?php
    require_once(__DIR__ .  "/controller/login-verify.php");
    require_once(__DIR__ . "/view/header.php");
    if(authenticateUser()) {
    require_once(__DIR__ . "/view/navigation.php");
    }
    require_once(__DIR__ . "/controller/create-db.php");
    require_once(__DIR__ . "/view/footer.php");
    require_once(__DIR__ . "/controller/read-posts.php")        
?>
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>