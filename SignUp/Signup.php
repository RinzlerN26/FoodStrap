<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Signin Template · Bootstrap v5.1</title>
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
      background-image: url("Signup.jpg");
      background-size: cover;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../SignIn/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form action="Sign-up.php" method="POST" onclick="return check()">
      <!--img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
      <h1 class="h3 mb-3 fw-normal"><i>Sign Up</i></h1>

      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        <span id="messageemail"></span>
      </div>
      <br>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        <span id="messagepassword"></span>
      </div>

      <div class="checkbox mb-3">
        <label>
          <i>Already have an account? Sign in <a href="../SignIn/Signin.php">here</i></a>
        </label>
      </div>
      <input value="Sign up" class="w-100 btn btn-lg btn-primary" type="submit">
      <p class="mt-5 mb-3 text-muted"><a href="../Welcome.php">Home</a></p>
    </form>
  </main>
  <script>
    function check() {
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;

      var corEmail = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
      if (!corEmail.test(email)) {
        document.getElementById("messageemail").innerText = "**Enter Valid Email Address";
        return false;
      }

      if (password.length < 8) {
        document.getElementById("messagepassword").innerText = "**Password must be of 8 characters";
        return false;
      }
    }
  </script>


</body>

</html>