<?php
                if(isset($_GET['url']))
                {
                    header("Location: " . $_GET['url']);
                    die();
                }
            ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Favicons -->

    <meta name="theme-color" content="#563d7c">


    <style>
       body { padding-top: 50px; }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Web-Hacking Grundlagen</a>
</nav>


<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="/">
              <span data-feather="home"></span>
              Startseite <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="xss.php">
              <span data-feather="file"></span>
              XSS
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="redirect.php">
              <span data-feather="shopping-cart"></span>
              Open Redirect
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">
              <span data-feather="users"></span>
              SQL Injection
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lfi.php">
              <span data-feather="bar-chart-2"></span>
              Local File Inclusion
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
     <div class="text-center align-self-center col-lg-6">
            <h1 class="h3 mb-3 font-weight-normal">Quellen:</h1>
                <ul class="list-group">
                    <li class="list-group-item"><a href="redirect.php?url=https://owasp.org">OWASP</a></li>
                </ul>
                <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
                <footer class="footer">
    <div class="inner">
      <p>Sample Application for <a href="https://learning.aware7.de/">Security Campus</a>, by <a href="https://twitter.com/awareseven">@awareseven</a>.</p>
    </div>
  </footer>
     </div> 
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>
