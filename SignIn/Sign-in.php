<?php
session_start();
$con = mysqli_connect("localhost", "root", "root", "Food_Db");



if (!$con) {
  die("failed to connect mysql due to" . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM Food_Users WHERE email = '$email' AND pass = '$password' ";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);


if ($count > 0) {
  $_SESSION['loggedin'] = true;
  $_SESSION['user'] = 'User';
  header("Location:  ../Restaurants/Restaurants.php");
  exit(0);
} else
  echo "Wrong Credentials";
