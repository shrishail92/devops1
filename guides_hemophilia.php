<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Guides / Manuals for hemophilia">
    <meta name="author" content="shrishail sh">

    <title>Fist | Guides / Manuals for hemophilia</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php
if (isset($_SESSION['user'])) {
    include('headerlogin.php');
} else {
    include('header.php');
}
?>
<div class="container marketing" id="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="jumbotron">
                <h2 class="featurette-heading">Guides for <span class="text-muted">hemophilia</span></h2>

                <p class="lead text-justify">
                    Hemophilia is a rare disorder that is complex to diagnose and manage. We aim to provide practical,
                    evidence-based
                    guidance to healthcare providers, government authorities, and patient organizations seeking to
                    initiate and/or
                    maintain hemophilia care programs. It is also hoped these guidelines will encourage practice
                    harmonization around
                    the world and, where recommendations lack adequate evidence, stimulate appropriate studies.
                </p>
            </div>

            <br/>

            <div class="row featurette">
                <div class="col-xs-6">
                    <div class="thumbnail">
                        <img class="featurette-image img-responsive img-thumbnail" src="images/doc1.png"
                             alt="Generic placeholder image">

                        <div class="caption">
                            <p>Exercises For People With Hemophilia By Kathy Mulder</p>
                        </div>
                    </div>
                    <br/>
                    <center>
                        <p>
                            <a class="btn btn-info" href="downloads/doc1.pdf" role="button" download>Download
                                <i class="glyphicon glyphicon-download"></i>
                            </a>
                        </p>
                    </center>
                </div>
                <div class="col-xs-6">
                    <div class="thumbnail">
                        <img class="featurette-image img-responsive img-thumbnail" src="images/doc2.png"
                             alt="Generic placeholder image">

                        <div class="caption">
                            <p>Emergency Care for Patients with Hemophilia disease</p>
                        </div>
                    </div>
                    <br/>
                    <center>
                        <p>
                            <a class="btn btn-info" href="downloads/doc2.pdf" role="button" download>Download
                                <i class="glyphicon glyphicon-download"></i>
                            </a>
                        </p>
                    </center>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-xs-6">
                    <div class="thumbnail">
                        <img class="featurette-image img-responsive img-thumbnail" src="images/doc3.png"
                             alt="Generic placeholder image">

                        <div class="caption">
                            <p>Physical Therapy By Indiana Hemophilia & Thrombosis Center,inc.</p>
                        </div>
                    </div>
                    <br/>
                    <center>
                        <p>
                            <a class="btn btn-info" href="downloads/doc3.pdf" role="button" download>Download
                                <i class="glyphicon glyphicon-download"></i>
                            </a>
                        </p>
                    </center>
                </div>
                <div class="col-xs-6">
                    <div class="thumbnail">
                        <img class="featurette-image img-responsive img-thumbnail" src="images/doc4.png"
                             alt="Generic placeholder image">

                        <div class="caption">
                            <p>Guidelines For The Management Of Hemophilia World Federation Of Hemophilia</p>
                        </div>
                    </div>
                    <br/>
                    <center>
                        <p>
                            <a class="btn btn-info" href="downloads/doc4.pdf" role="button" download>Download
                                <i class="glyphicon glyphicon-download"></i>
                            </a>
                        </p>
                    </center>
                </div>
            </div>

        </div>
        <!--/.col-xs-12.col-sm-9-->

        <?php include "sidebar_menu.php"; ?>
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="list-group">
                <?php include("fb_like_box.php") ?>
            </div>
        </div>

    </div>
    <!--/row-->

</div>
<!--/.container-->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>

<script src="js/offcanvas.js"></script>
<?php include 'footer.php'; ?>
</body>
</html>
