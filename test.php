<?php
session_start(['cookie_lifetime' => 43200, 'cookie_secure' => true, 'cookie_httponly' => true]);
if (isset($_POST['submit'])) {

  $data = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'password' => $_POST['password']
  ];

  if (!isset($_SESSION['data'])) {
    $_SESSION['data'][] = $data;
  } elseif (isset($_SESSION['data']) && !in_array($data, $_SESSION['data'])) {
    $_SESSION['data'][] = $data;
  }
  $_SESSION['loggedIN'] = true;

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Document</title>
</head>
<style>
  .btn {
    display: inline-block;
    padding: 3px 9px;
    margin: 3px 0;
    background-color: red;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
  }
</style>

<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">password</th>
        <!-- <th scope="col">Handle</th> -->
      </tr>
    </thead>

    <tbody>
      <?php
      if (isset($_SESSION['loggedIN']) && $_SESSION['loggedIN'] == true) {
        foreach ($_SESSION['data'] as $value) { ?>
          <tr>

            <td><?= $value['name'] ?></td>
            <td><?= $value['email'] ?></td>
            <td><?= $value['password'] ?></td>
          </tr>
        <?php }
      } else {
        header("location:index.php");
      } ?>
      <a href="logout.php" class="btn">logout</a>
      <br>
    </tbody>

  </table>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
</body>

</html>