<?php
session_start();
unset($_SESSION['loggedIN']);
echo "<br>";
header("location:index.php");
?>