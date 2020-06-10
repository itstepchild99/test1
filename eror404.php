<?php
Header("HTTP/1.1 404 Not Found");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Favicon -->
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <title>Document</title>
</head>
<body>

  <!-- HEADER -->
   <header>
     <div class="shadow-sm rounded">
       <img class="d-block mx-auto" src="img/LEGO ПРИКЛЮЧЕНИЯ.png" width="200" draggable="false" alt="Logo">
     </div>

     <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand mr-5" href="#">LEGO Adventures</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" ariaexpanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- menu -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About me</a>
              </li>
              <!-- dropdown menu -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Blog
                </a>
                <div class="dropdown-menu" id="custom-dropdown-menu">
                  <a class="dropdown-item" href="post-01.html">
                    Spider-Man
                    <span class="badge badge-secondary badge-info ml-2">
                      New
                    </span>
                  </a>
                  <a class="dropdown-item" href="list1.html">Batman</a>
                  <a class="dropdown-item" href="lisе2.html">Panther</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
          </div>
          <!-- /menu -->
        </div>
      </nav>
   </header>

 <!-- MAIN -->
 <main class="pt-3">
    <div class="container">
      <div class="row">

        <h1>EROR 404!</h1>
      </div>
    </div>

 </main>

 <!-- FOOTER -->
 <footer class="border-top">
   <div class="container">
     <!-- Logo - About - Contact -->
     <div class="row py-3 text-light">

        <!-- Logo -->
        <div class="col-md-4">
          <img src="img/LEGO ПРИКЛЮЧЕНИЯ.png" alt="Logo" width="250" class="img-fluid">
        </div>

        <!-- About -->
        <div class="col-md-4">
          <h3>About</h3>
          <p>
             Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Justo nec ultrices
            dui sapien eget mi proin.
          </p>
        </div>

        <!-- Contact me -->
        <div class="col-md-4">
          <h3>Contact me</h3>
          <p>
            If you are interested in working with
            me or just want to say hello simply
            write on email.
            <br>
            <strong>Email: <a href="#" class="text-white">contact@gmail.com</a></strong>
          </p>
        </div>

      </div>

      <!-- Copyright -->
      <div class="row py-3 d-flex justify-content-center border-top">
        <small class="d-block text-light">
          Copyright &copy; 2025 Rob Smith Blog
        </small>
      </div>


   </div>

 </footer>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>

<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  $(function () {
    $('[data-toggle="popover"]').popover()
  })
</script>
