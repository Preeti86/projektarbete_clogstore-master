<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav role="navigation" class="uk-navbar">
    <a href="/index.php" class="uk-navbar-brand">Clogstore</a>

    <div class="uk-navbar-flip">
        <ul class="uk-navbar-nav">


            <li><a href="?controller=user_profile">Profile</a></li>
            <li><a href="?controller=user_edit">Edit profile</a></li>
            <li><a href="?controller=user_update">Update profile</a></li>
            <li><a href="?controller=user_delete">Delete account</a></li>
            <?php

            $isloggedin = true;
            $isloggedin = false;

            If ($isloggedin == true ){}

            header ("?controller=log_out");


            ?>


        </ul>
    </div>

</nav>