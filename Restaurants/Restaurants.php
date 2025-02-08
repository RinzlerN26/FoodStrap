<?php
session_start();

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Album example · Bootstrap v5.1</title>



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
  </style>


</head>

<body>

  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Created by NR</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Links</h4>
            <ul class="list-unstyled">
              <li><a href="Welcome.php" class="text-white">Home</a></li>
              <?php
              if (isset($_SESSION['user'])) {

              ?>
                <li>
                  <p class="text-white">Welcome <?php echo $_SESSION['user']; ?></a>
                </li>
              <?php
              } else {
              ?>
                <li><a href="Signin.php" class="text-white">Sign In</a></li>
              <?php
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">

          <strong>Food Delivery</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Restaurants</h1>
          <p class="lead text-muted">Browse through our wide variety of restaurants specializing in different cuisines. Select any one of the restaurants below to place your order</p>
          <p>
            <a href="../Welcome.php" class="btn btn-primary my-2">Home</a>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/l10maln4nn2pfdvhzg6b" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#55595c" /></img>
              <div class="card-body">
                <form action="../Menu/Menu.php" method="POST">
                  <p class="card-text">
                  <div class="">
                    <div><b>Tea Point</b></div>
                  </div>
                  <div class="Rating">
                    <hr>
                    <ul>
                      <li>Rating:⭐⭐⭐</li>
                      <li>₹200 Cost for two</li>
                      <li>37 Min</li>
                    </ul>
                    <br>
                    Bakery, Beverages
                    <br>
                    <br>
                    <br>
                    <p>
                      Shipra Mall, Indirapuram
                    </p>
                  </div>


                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <input type="submit" value="View" class="btn btn-sm btn-outline-secondary">
                      <input type="hidden" value="Tea Point" name="RName">
                      <input type="hidden" value="TP" name="Id">
                    </div>
                    <small class="text-muted">3.2 km</small>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/nzwvzlmpp8efspr1svbu" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#55595c" /></img>

              <div class="card-body">
                <form action="../Menu/Menu.php" method="POST">
                  <p class="card-text">
                  <div class="">
                    <div><b>Aggarwal's</b></div>
                  </div>
                  <div class="Rating">
                    <hr>
                    <ul>
                      <li>Rating:⭐⭐⭐⭐⭐</li>
                      <li>₹400 Cost for two</li>
                      <li>25 Min</li>
                      <br>
                    </ul>
                    Maharashtrian, North Indian
                    <br>
                    <br>
                    <br>
                    <p>
                      B Block market sec-62, Sector 62
                    </p>
                  </div>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <input type="submit" value="View" class="btn btn-sm btn-outline-secondary">
                      <input type="hidden" value="Aggarwal" name="RName">
                      <input type="hidden" value="TP" name="Id">
                    </div>
                    <small class="text-muted">2.8 km</small>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/sbsiyhrfd0y27jv45ofm" focusable="false">
              <rect width="100%" height="100%" fill="#55595c" /></img>

              <div class="card-body">
                <form action="../Menu/Menu.php" method="POST">
                  <p class="card-text">
                  <div class="">
                    <div><b>Chawla's</b></div>
                  </div>
                  <div class="Rating">
                    <hr>
                    <ul>
                      <li>Rating:⭐⭐⭐⭐</li>
                      <li>₹250 Cost for two</li>
                      <li>28 Min</li>
                    </ul>
                    <br>
                    Chinese, North Indian
                    <br>
                    <br>
                    <br>
                    <p>
                      Central Market, Sector 50
                    </p>
                  </div>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <input type="submit" value="View" class="btn btn-sm btn-outline-secondary">
                      <input type="hidden" value="Chawla" name="RName">
                      <input type="hidden" value="TP" name="Id">
                    </div>
                    <small class="text-muted">1.2 km</small>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/kj3mfhtqlel37hebnkpt" focusable="false">
              <rect width="100%" height="100%" fill="#55595c" /></img>

              <div class="card-body">
                <form action="../Menu/Menu.php" method="POST">
                  <p class="card-text">
                  <div class="">
                    <div><b>Bikaner</b></div>
                  </div>
                  <div class="Rating">
                    <hr>
                    <ul type="">
                      <li>Rating:⭐⭐⭐</li>
                      <li>₹300 Cost for two</li>
                      <li>30 Min</li>
                    </ul>
                    <br>
                    Desserts, Sweets
                    <br>
                    <br>
                    <br>
                    <p>
                      Jaipuria Sunrise Plaza, Indirapuram
                    </p>
                  </div>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <input type="submit" value="View" class="btn btn-sm btn-outline-secondary">
                      <input type="hidden" value="Bikaner" name="RName">
                      <input type="hidden" value="TP" name="Id">
                    </div>
                    <small class="text-muted">2.5 km</small>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/g1i7yk2hv4oeajcmw8wj" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#55595c" /></img>

              <div class="card-body">
                <form action="../Menu/Menu.php" method="POST">
                  <p class="card-text">
                  <div class="">
                    <div><b>Chanda Food</b></div>
                  </div>
                  <div class="Rating">
                    <hr>
                    <ul type="">
                      <li>Rating:⭐⭐⭐</li>
                      <li>₹299 Cost for two</li>
                      <li>46 Min</li>
                    </ul>
                    <br>
                    Chinese, Fast Food
                    <br>
                    <br>
                    <br>
                    <p>
                      Indirapuram
                    </p>
                  </div>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <input type="submit" value="View" class="btn btn-sm btn-outline-secondary">
                      <input type="hidden" value="Chanda Food" name="RName">
                      <input type="hidden" value="TP" name="Id">
                    </div>
                    <small class="text-muted">4.0 km</small>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/aw5btqdfxp7xkzyiuwdr" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <rect width="100%" height="100%" fill="#55595c" /></img>

              <div class="card-body">
                <form action="../Menu/Menu.php" method="POST">
                  <p class="card-text">
                  <div class="">
                    <div><b>Goli Vada Pav</b></div>
                  </div>
                  <div class="Rating">
                    <hr>
                    <ul type="">
                      <li>Rating:⭐⭐⭐⭐</li>
                      <li>₹100 Cost for two</li>
                      <li>28 Min</li>
                    </ul>
                    <br>
                    Maharashtrian, North Indian
                    <br>
                    <br>
                    <br>
                    <p>
                      Krishna Apra Market, Indirapuram
                    </p>
                  </div>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <input type="submit" value="View" class="btn btn-sm btn-outline-secondary">
                      <input type="hidden" value="Goli Vada Pav" name="RName">
                      <input type="hidden" value="TP" name="Id">
                    </div>
                    <small class="text-muted">3.8 km</small>
                  </div>
                </form>
              </div>
            </div>
          </div>


  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#" class="btn btn-primary my-2">Back to top</a>
      </p>
      <p class="mb-1"></p>
      <p class="mb-0"> <a href="/"></a> <a href=""></a>.</p>
    </div>
  </footer>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>