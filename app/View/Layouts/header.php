<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Go Fast Express Inc.</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/foundation.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/glDatePicker.flatwhite.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    <script src="/js/modernizr.js"></script>
    <script src="/js/foundation.dropdown.js"></script>
    <script src="/js/foundation.topbar.js"></script>
  </head>
  <body>
    <header>
      <div class="row">
        <div class="large-4 columns">
          <h1><a href="#"><img width="250" height="250" src="/img/logo.png"/></a></h1>
        </div>
        <div class="large-8 columns">
          </br>
          <h4 class="right">Your #1 Source for Transportation Services</h4>
        </div>
      </div>
      <div class="contain-to-grid sticky">
      <nav class="top-bar" data-topbar>
        <!-- Right Nav Section -->
        <div class="row">
        <div class="large-12 columns">
        <ul class="title-area">
          <li class="name">
            <h1><a href="#"></a></h1>
          </li>
            <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
          </ul>
          <ul class="right">
            <li <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="active"'; ?>><a href="/index.php" >Home</a></li>
            <li <?php if (strpos($_SERVER['PHP_SELF'], 'about.php')) echo 'class="active"'; ?>><a href="/pages/about.php" >About Us</a></li>
            <li <?php if (strpos($_SERVER['PHP_SELF'], 'quotes.php')) echo 'class="active"'; ?>><a href="/pages/quotes.php" >Quotes</a></li>
            <li <?php if (strpos($_SERVER['PHP_SELF'], 'jobs.php')) echo 'class="active"'; ?>><a href="/pages/jobs.php" >Jobs</a></li>
          </ul>
        </div>
        </div>
      </nav>
      </div>
    </header>