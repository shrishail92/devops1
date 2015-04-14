<!DOCTYPE html>
<html lang="en-US">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="navigation">
    <meta name="author" content="shrishail sh">
    <link rel="icon" href="images/logo1.png">

    <title>Header</title>

    <link href="WordPress/dashicons.css" rel="stylesheet" type="text/css">
    <link href="WordPress/css.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="WordPress/wp4.css">
    <link media="only screen and (max-device-width: 480px)" href="WordPress/iphone.css" type="text/css"
          rel="stylesheet">
    <link rel="pingback" href="#">
    <link href="css/popupcontact.css" rel="stylesheet">
    <link rel="stylesheet" href="sweetalert-master/lib/sweet-alert.css">

    <script src="js/popup.js"></script>
    <script type="text/javascript" async="" src="WordPress/quant.js"></script>
    <script src="WordPress/ga.js" async="" type="text/javascript"></script>
    <script src="sweetalert-master/lib/sweet-alert.min.js"></script>
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/jquery-2.1.3.min.js"></script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wporg-themes-css" href="WordPress/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="jetpack_css-css" href="WordPress/jetpack.css" type="text/css" media="all">
    <script type="text/javascript" src="WordPress/jquery.js"></script>
    <script type="text/javascript" src="WordPress/jquery-migrate.js"></script>
    <script type="text/javascript" src="WordPress/jsapi"></script>
    <script>document.cookie = 'devicePixelRatio=' + ((window.devicePixelRatio === undefined) ? 1 : window.devicePixelRatio) + '; path=/';</script>
    <script type="text/javascript">
        var toggleMenu = function () {
            var m = document.getElementById('wporg-header-menu'),
                c = m.className;
            m.className = c.match(' active') ? c.replace(' active', '') : c + ' active';
        }
    </script>
</head>

<body id="wordpress-org" class="home blog">
<!-- popup contact form -->
<div style="overflow:hidden;">
    <div id="abc">
        <!-- Popup Div Starts Here -->
        <div id="popupContact">
            <!-- Contact Us Form -->
            <form action=<?php echo $_SERVER['PHP_SELF']; ?> id="form" method="post" name="form">
                <img id="close" src="images/3.png" onclick="div_hide()">

                <h2>Contact Us</h2>
                <hr>
                <input id="name" name="name" placeholder="Name" type="text" required pattern="[a-zA-Z ]{1,30}"
                       title="Enter only characters">
                <input id="email" name="email" placeholder="Email" type="email" required>
                <input id="mobile" name="mobile" value="+91" placeholder="Mobile number [ optional ]" type="text" pattern="[+][0-9]{12}"
                       title="Enter 10 digit mobile number">
                <input id="subject" name="subject" placeholder="Subject [ optional ]" type="text">
                <textarea id="msg" name="message" placeholder="Message" required></textarea>
                <input type="submit" value="send" name="contactus" id="submitbutton" onclick="progress()">
                <!--<button type="submit" class="b button-primary" name="contactus" id="submitbutton" onclick="progress()">
                    <i class="glyphicon glyphicon-send"></i> send
                </button>-->
                <div id="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                         aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="sr-only">99% Complete</span>
                    </div>
                </div>
            </form>

        </div>
        <!-- Popup Div Ends Here -->
    </div>
</div>


<!-- popup contact form ends here -->
<div id="wporg-header">
    <div class="wrapper">
        <a id="mobile-menu-button" class="" href="#" onclick="toggleMenu();"></a>

        <h1><a href="index.php" title="Future India Social Trust">
                <img src="images/Helping_Hands_cropped.jpg" class="logo" height="55px" width="55px" alt="logo"/>
                <span>{ F.I.S.T }</span>
            </a>
        </h1>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <div class="col-lg-12">
                    <div class="input-group" style="margin-right:11px; max-width:270px;">
                        <input type="search" class="form-control searchbox" placeholder="Search here...">
                      <span class="input-group-btn">
                        <button class="btn btn-default searchbutton" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                      </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
            </li>
        </ul>
        <div style="clear:both"></div>

        <ul id="wporg-header-menu">

            <li>
                <a href="home.php" title="Go to home page" class="current"><i class="glyphicon glyphicon-home"></i>&nbsp;Home</a>

                <div class="uparrow"></div>
            </li>

            <li>
                <a href="#">Hemophilia <span class="caret"></span></a>
                <ul class="nav-submenu">
                    <li>
                        <a href="history_hemophilia.php" title="History of hemophilia."> <i class="glyphicon glyphicon-road"></i> History</a>
                    </li>
                    <li>
                        <a href="statistics_hemophilia.php" title="Statistics in india and world."> <i class="glyphicon glyphicon-stats"></i> Statistics</a>
                    </li>
                    <li>
                        <a href="about_hemophilia.php" title="Details about hemophilia"> <i class="glyphicon glyphicon-info-sign"></i> About Hemophilia</a>
                    </li>

                </ul>
                <div class="uparrow"></div>
            </li>

            <li>
                <a href="#">Patient Education <span class="caret"></span></a>
                <ul class="nav-submenu">
                    <li>
                        <a href="videos_hemophilia.php" title="Educational videos"> <i class="glyphicon glyphicon-facetime-video"></i> Videos</a>
                    </li>
                    <li>
                        <a href="glossary_hemophilia.php" title="Meanings for words."> <i class="glyphicon glyphicon-list-alt"></i> Glossary</a>
                    </li>
                    <li>
                        <a href="guides_hemophilia.php" title="Pdf documents."> <i class="glyphicon glyphicon-folder-open"></i> Guides / Manuals</a>
                    </li>
                </ul>
                <div class="uparrow"></div>
            </li>

            <li>
                <a href="#">Health Care <span class="caret"></span></a>
                <ul class="nav-submenu">
                    <li>
                        <a href="#" title="Medicines suggested by doctors"> <i class="glyphicon glyphicon-plus"></i> Medicines</a>
                    </li>
                    <li>
                        <a href="treatment_center_search.php" title="search treatment centers in india"> <i class="glyphicon glyphicon-plus-sign"></i> Treatment
                            Centers</a>
                    </li>
                </ul>
                <div class="uparrow"></div>
            </li>

            <li>
                <a href="#">About us</a>
            </li>

            <li>
                <a href="#" onclick="div_show()"><i class="glyphicon glyphicon-envelope"></i>&nbsp;Contact us</a>
            </li>
            <li style="float:right;">
                <a href="#">
                    <?php
                    if (isset($_SESSION['user']))
                        echo $_SESSION['user'] . ' ';
                    ?>
                    <i class="glyphicon glyphicon-user"></i>&nbsp;<i class="glyphicon glyphicon-collapse-down"></i>
                </a>
                <ul class="nav-submenu">
                    <li><a href="signout.php"><i class="glyphicon glyphicon-log-in"></i> Signout</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
                </ul>
                <div class="uparrow"></div>
            </li>
        </ul>
        <div style="clear:both">

        </div>
    </div>
</div>

<div id="headline">
    <div class="wrapper">
        <h2 class="site-title">The best way to find yourself is to lose yourself in the service of others.</h2>
    </div>
</div>
<nav id="site-navigation" class="main-navigation" role="navigation">
    <div id="menu-theme-directory" class="menu">
        <marquee><a href="#">Watch out for latest news here</a></marquee>
    </div>
</nav>
</body>
<?php
if (isset($_POST['contactus'])) {
    require_once 'Swift-5.1.0/lib/swift_required.php';
    ini_set('max_execution_time', 600);
    $sub = "contact fist";
    $name = $_POST['name'];
    $sender = $_POST['email'];
    $msg = $_POST['message'];
    $sub = $_POST['subject'];

    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
        ->setUsername('fist4hemophilia@gmail.com')
        ->setPassword('fist4hemophilia92');

    $mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance($sub)
        ->setFrom(array($sender => $sender))
        ->setTo(array('fist4hemophilia@writeme.com'))
        ->setBody($msg);

    $result = $mailer->send($message);
    if ($result == 1) {
        ?>
        <script type='text/javascript'>
            swal("Good job!", "Thank you for contacting us. We will reach you very soon.", "success");
        </script>
    <?php
    }
    else
    {
    ?>
        <script type='text/javascript'>
            swal("Oops...!", "Something went wrong! Try again after some time.", "error");
        </script>
    <?php
    }
}
?>
</html>