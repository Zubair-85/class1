<?php  require_once("connection.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

<h3 class="text-white text-center rounded bg-dark">Login Form</h3>

<form action="" method="POST" enctype="multipart/form-data">

Username: <input type="text" name="username" id="username" class="form-control">

Email: <input type="email" name="email" id="email" class="form-control">

Password: <input type="password" name="password" id="password" class="form-control">

<input type="submit" name="submit" id="submit" class="btn btn-info w-100">

<p class="float-end"><a href="register.php">Register</p></a>



</form>


</div>
    
</body>
</html>