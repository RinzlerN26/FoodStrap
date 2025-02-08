<?php

$con = mysqli_connect("localhost", "root", "root", "Food_Db");

if (!$con) {
  die("failed to connect mysql due to" . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * from Food_Users where email='$email' ";
$check = mysqli_query($con, $sql);

if (mysqli_num_rows($check) > 0)
  echo "Email already exists";

else {

  $sql = "INSERT INTO Food_Users (email, pass) VALUES ('$email', '$password')";

  if ($con->query($sql) == TRUE) {
    header("Location: ../SignIn/Signin.php");
    exit(0);
  }
}
$con->close();
