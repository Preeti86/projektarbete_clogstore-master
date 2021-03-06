<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<div class="header">
    <h1><a href="?controller=default">CLOGSTORE</a></h1>

    <ul>
        <li><a href="?controller=default">Home</a></li>

        <li class="dropdown">
            <a href="?controller=products" class="dropbtn">Products</a>
            <div class="dropdown-content">
                <a href="?controller=products">All products</a>
                <a href="?controller=products&cat=1">Men</a>
                <a href="?controller=products&cat=2">Women</a>
                <a href="?controller=products&cat=3">Kids</a>
            </div>
        </li>

        <li><a href="?controller=cart">Cart</a></li>

        <li class="dropdown">
            <a href="?controller=log_in" class="dropbtn">Log in</a>

        </li>
        <!--  var_dump SUPER VIKTIGT!-->
        <li><?php if (isset($_SESSION['u_id'])){ echo '<a href="?controller=log_out">Logout';}?></a></li>
    </ul>
</div>

</body>
</html>







