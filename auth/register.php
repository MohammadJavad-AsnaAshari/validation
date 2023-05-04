<?php
//require_once "./../Controllers/RegisterController.php";
require_once "./../vendor/autoload.php";
use App\Controllers\RegisterController;
use Admin\Admin;

helloWorld();

$admin = new Admin();
$admin->index_admin();

$registerController = new RegisterController();
$registerController->index();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
</head>
<body>
<h2>Register</h2>
<ul>
    <li><a href="/index.php">index</a></li>
    <li><a href="/article.php">article</a></li>
    <li><a href="login.php">login</a></li>
    <li><a href="register.php">register</a></li>
</ul>
</body>
</html>