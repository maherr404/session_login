<?php


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <form class="col-6" method="POST" action="test.php" enctype="multipart/form-data">

        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input type="text" required class="form-control" name="name" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="Enter name">
            <small id="emailHelp" class="form-text text-muted">We'll never share your name and email with anyone
                else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">email</label>
            <input type="email" required name="email" class="form-control" id="exampleInputPassword1"
                placeholder="email">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">password</label>
            <input type="password" required name="password" class="form-control" id="exampleInputPassword1"
                placeholder="password">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>