<?php
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");

if (!authenticateUser()) {
    header("Location: " . $path . "index.php");
    die();
}
?>
<nav>
    <ul>
        <li><a href="<?php echo $path . "post.php" ?>">Blog post Form</a></li>
    </ul>
    <ul>
        <li><a href="<?php echo $path . "controller/logout-user.php" ?>">Logout</a></li>
    </ul>
</nav>