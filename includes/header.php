<?php
session_start();
include 'config.php'
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Resources/bootstrap/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/Resources/custom-css/styles.css">
    <script src="/Resources/bootstrap/js/jquery-3.1.1.min.js"></script>
    <script src="/Resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Resources/bootstrap/js/bootstrap-datepicker.min.js"></script>
    <title><?php echo $title ?></title>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"> <?php echo $title ?></a>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <ul class="nav navbar-nav navbar-left">
            <li><a href="/">Home</a></li>
        </ul>
        <?php
        if ($_SESSION['logged_in'] == 1) { ?>
            <ul class="nav navbar-nav navbar-right">
                <?php if ($_SESSION['student_logged_in'] == 1) {
                    echo "<li><a href=\"/student\">My Account</a></li>";
                }
                ?>
                <li><a href="/logout.php">Logout</a></li>
            </ul>
        <?php } else {
            ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login.php">Login</a></li>
                <li><a href="/register.php">Register</a></li>
            </ul>
        <?php } ?>

    </div><!-- /.container-fluid -->
</nav>

