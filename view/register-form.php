<link type="text/css" rel="stylesheet" href="dist/css/bootstrap-theme.css">
<link type="text/css" rel="stylesheet" href="dist/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="style.css">
<?php
    require_once(__DIR__ . "/../model/config.php");
?>
<div class="container">
    <div class="jumbotron">

        <h1>Hello</h1>
        <ul class="nav nav-pills">
            <li role="presentation" ><a href="index.php">Home</a></li>
            <li role="presentation"><a href="login.php">Login</a></li>
            <li role="presentation" class="active"><a href="register.php">Register</a></li>
        </ul>
    </div>
</div>

<h1>Login/h1>

<form method="post" action="<?php echo $path . "controller/login-user.php"; ?>">
    <div> 
        <label for="email">Email: </label>
        <input type="text" name="email" />
    </div>
    
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" />
    </div>
    
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" />
    </div>
    
    <div>
        <button type="type"submit>Submit</button>
    </div>
</form>

