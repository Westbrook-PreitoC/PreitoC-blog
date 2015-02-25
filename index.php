<!--//this part of code lets us link all the pages together-->
<link type="text/css" rel="stylesheet" href="dist/css/bootstrap-theme.css">
<link type="text/css" rel="stylesheet" href="dist/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="style.css">


<div class="container">
    <div class="jumbotron">
        <h1>Hello This is My Home Page</h1>

<div class="btn-group" role="group" aria-label="...">
    <a class="btn btn-default" href="index.php">Home</a>
    <a class="btn btn-default" href="login.php">Login</a>
    <a class="btn btn-default" href="register.php">Register</a>
 

  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
      Portfolio 3
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li><a href="Portfolio3Cameron-master/public_html/index.html">About me</a></li>
        <li><a href="Portfolio3Cameron-master/public_html/technology.html">Technology</a></li>
        <li><a href="Portfolio3Cameron-master/public_html/project.html">Projects</a></li>
    </ul>
  </div>
</div>

    </div>
</div>

<?php
require_once(__DIR__ . "/controller/login-verify.php");
require_once(__DIR__ . "/view/header.php");
if (authenticateUser()) {
    require_once(__DIR__ . "/view/navigation.php");
}
require_once(__DIR__ . "/controller/create-db.php");
require_once(__DIR__ . "/view/footer.php");
require_once(__DIR__ . "/controller/read-posts.php")
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>