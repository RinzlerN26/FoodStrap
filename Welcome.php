<?php
session_start();

?>

<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Cover Template · Bootstrap v5.1</title>





  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    body {
      background-image: url("Images/Welcome.jpg");
      background-size: cover;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h3 class="float-md-start mb-0"><i><strong>Food Delivery App</strong></i></h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="SignIn/Signin.php">Sign In</a>
          <a class="nav-link" href="Restaurants/Restaurants.php">Restaurants</a>
        </nav>
      </div>
    </header>

    <main class="px-3">
      <h1>Food Delivery Redefined</h1>
      <p class="lead"><i>Experience good food with fastest deliveries.Offering food from the best restaurants delivered to you instantly</i></p>
      <p class="lead">
        <a href="Restaurants/Restaurants.php" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Order Now</a>
      </p>
    </main>

    <footer class="mt-auto text-white-50">
      <p> <a href="" class="text-white"></a>Created by <a href="" class="text-white">NR</a>.</p>
    </footer>
  </div>



</body>

</html>