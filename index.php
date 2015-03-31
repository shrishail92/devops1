<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="shrishail sh">
    <link rel="icon" href="images/logo1.png">
    <title>Fist | Cover Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
    
    <link href="css/popup.css" rel="stylesheet">
    <script src="js/popup.js"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="body" style="overflow:hidden;">
  <div id="abc">
    <!-- Popup Div Starts Here -->
    <div id="popupContact">
        <!-- Contact Us Form -->
        <form action="#" id="form" method="post" name="form">
            <img id="close" src="images/3.png" onclick ="div_hide()">
            <h2>Contact Us</h2>
            <hr>
            <input id="name" name="name" placeholder="Name" type="text" required>
            <input id="email" name="email" placeholder="Email" type="text" required>
            <textarea id="msg" name="message" placeholder="Message" required></textarea>
            <!--
            javascript validation
            <input type="submit" id="submit" value="Send" onclick="check_empty()">-->
            <input type="submit" id="submit" value="Send">
        </form>
    </div>
    <!-- Popup Div Ends Here -->
  </div>
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Welcome to F.I.S.T</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Features</a></li>
                  <li><a href="#" onclick="div_show()">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Future India Social Trust</h1>
            <img src="images/logo1.png" class="logomain" height="150px" width="150px" alt="logo" />
            <p class="lead">This is a website for helping the people who are poor and suffering from the disease hemophilia. 
            And this is also for the one who wants to help the hemophilia patients. Click below link to mark your footprint 
            for the betterment of our society.</p>
            <!--<div class="progress">
              <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="99" aria-valuemin="0"                     aria-valuemax="100" style="width: 100%">
                <span class="sr-only">99% Complete</span>
              </div>
            </div>-->
            <p class="lead">
              <a href="home.php" class="btn btn-lg btn-default">Enter &raquo;</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>All rights reserved by <a href="home.php">Future India Social Trust</a>, &copy;copyright 2015.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>