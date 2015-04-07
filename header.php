<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="navigation">
    <meta name="author" content="shrishail sh">
    <link rel="icon" href="images/logo1.png">

    <title>Fist | Header</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/popupcontact.css" rel="stylesheet">

      <script src="js/jquery-2.1.3.min.js"></script>

      <!-- This is what you need -->
      <script src="sweetalert-master/lib/sweet-alert.min.js"></script>
      <link rel="stylesheet" href="sweetalert-master/lib/sweet-alert.css">

    <script src="js/popup.js"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>

        <!-- popup contact form -->
        <div style="overflow:hidden;">
            <div id="abc">
                <!-- Popup Div Starts Here -->
                <div id="popupContact">
                    <!-- Contact Us Form -->
                    <form action=<?php echo $_SERVER['PHP_SELF'];?> id="form" method="post" name="form">
                        <img id="close" src="images/3.png" onclick ="div_hide()">
                        <h2>Contact Us</h2>
                        <hr>
                        <input id="name" name="name" placeholder="Name" type="text" required>
                        <input id="email" name="email" placeholder="Email" type="email" required>
                        <input id="subject" name="subject" placeholder="Subject" type="text">
                        <textarea id="msg" name="message" placeholder="Message" required></textarea>
                        <input type="submit" value="send" name="contactus" id="submitbutton" onclick="progress()">
                        <div id="progress">
                            <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                <span class="sr-only">99% Complete</span>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- Popup Div Ends Here -->
            </div>
        </div>

        <!-- popup contact form ends here -->

    <div class="navbar-wrapper">

        <nav class="navbar navbar-inverse">

            <ul class="nav navbar-nav adjust">
              <li>
                <a href="index.php">
                  <img src="images/Helping_Hands_cropped.jpg" class="logo" height="55px" width="55px" alt="logo"/>
                </a>
              </li>
              <li class="navbar-brand"><h1><span FACE="algerian">Future India Social Trust</span></h1></li>
              <li>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                  <div class="col-lg-12">
                    <div class="input-group">
                      <input type="search" class="form-control searchbox" placeholder="Search here...">
                      <span class="input-group-btn">
                        <button class="btn btn-default searchbutton" type="button"><i class="glyphicon glyphicon-search"></i></button>
                      </span>
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
                </li>
            </ul>


            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="home.php"><i class="glyphicon glyphicon-home"></i>&nbsp;Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hemophilia <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="history_hemophilia.php">History</a></li>
                    <li><a href="statistics_hemophilia.php">Statistics</a></li>
                    <li><a href="about_hemophilia.php">About Himophilia</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Know More</li>
                    <li><a href="#">Ongoing Researches</a></li>
                    <li><a href="#">Employment Opportunities</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Patient Education <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="guides_hemophilia.php">Guides / Manuals</a></li>
                    <li><a href="glossary_hemophilia.php">Glossary</a></li>
                    <li><a href="videos_hemophilia.php">Videos</a></li> 
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Health Care <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Medicines</a></li>
                    <li><a href="treatment_center_search.php">Treatment Centers</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Projects <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Ongoing</a></li>
                    <li><a href="#">Completed</a></li>
                  </ul>
                </li>

                <li><a href="#">About us</a></li>
                <li><a href="#" onclick="div_show()"><i class="glyphicon glyphicon-envelope"></i>&nbsp;Contact us</a></li>

              </ul>

              <ul class="nav navbar-nav navbar-right">
                <div class="pull-right hidden-xs">
                  <a href="#" class="" data-toggle="dropdown"><h5><i class="glyphicon glyphicon-user"></i>&nbsp;<i class="glyphicon glyphicon-collapse-down"></i></h5></a>
                  <ul class="dropdown-menu">
                      <li><a href="signin.php"><i class="glyphicon glyphicon-log-in"></i> Signin</a></li>
                      <li><a href="signup.php"><i class="glyphicon glyphicon-share-alt"></i> Signup</a></li>
                  </ul>
                </div>
              </ul>

            </div>

        </nav>
      <div id="headline"><span>The best way to find yourself is to lose yourself in the service of others.</span></div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>

  <?php
      if(isset($_POST['contactus']))
      {
          require_once 'swiftmailer-5.x/lib/swift_required.php';
          ini_set('max_execution_time', 600);
          $sub="contact fist";
          $name=$_POST['name'];
          $sender=$_POST['email'];
          $msg=$_POST['message'];
          $sub=$_POST['subject'];

          $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
              ->setUsername('fist4hemophilia@gmail.com')
              ->setPassword('fist4hemophilia92');

          $mailer = Swift_Mailer::newInstance($transport);

          $message = Swift_Message::newInstance($sub)
              ->setFrom(array($sender => $sender))
              ->setTo(array('fist4hemophilia@writeme.com'))
              ->setBody($msg);

          $result = $mailer->send($message);
          if($result==1)
          {?>
              <script type='text/javascript'>
                  swal("Good job!", "Thank you for contacting us. We will reach you very soon.", "success");
              </script>
          <?php
          }
          else
          {?>
              <script type='text/javascript'>
                  swal("Oops...!", "Something went wrong! Try again after some time.", "error");
              </script>
          <?php
          }
      }
  ?>

</html>
