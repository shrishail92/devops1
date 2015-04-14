<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Statistics of hemophilia">
    <meta name="author" content="shrishail sh">

    <title>Fist | Statistics of hemophilia</title>

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
                <h2 class="featurette-heading">Statistics <span class="text-muted">of Hemophilia</span></h2>

                <p class="lead text-justify">
                    Hemophilia is a rare hereditary bleeding disorder. This disease occurs due to deficiency of clotting
                    factors
                    resulting in the blood taking prolonged time to clot. Hemophilia occurs in about 1 of every 5,000
                    male births.
                    Hemophilia A is about four times as common as hemophilia B, and about half of those affected have
                    the severe form.
                    Hemophilia affects people from all racial and ethnic groups.
                </p>
            </div>

            <div class="row">
                <div class="col-xs-6 col-lg-12">
                    <h2><span class="text-muted">Hemophilia in</span> the world</h2><br/>
                </div>
                <div class="col-lg-12">
                    <img class="img-responsive img-thumbnail" src="images/statworld.png" alt="Generic placeholder image">
                </div>
            </div>
            <p class="text-justify">
                <br/>
                <span class="para">
                    Global distribution of total reported cases of bleeding disorders (a) and haemophilia A (c) in five countries
                    reporting the highest number of patients. (b) and (d) show that nearly 5 and 9% of global patients with bleeding
                    disorders and haemophilia A are from India.
                </span><br/>
            </p>

            <div class="row">
                <div class="col-xs-6 col-lg-12">
                    <h2><span class="text-muted">Hemophilia in</span> India</h2><br/>
                </div>
                <div class="col-lg-12">
                    <img class="img-responsive img-thumbnail" src="images/statindia.png" alt="Generic placeholder image">
                </div>
            </div>
            <p class="text-justify">
                <br/>
                <span class="para">
                    In India, the incidence of hemophilia is nearly 1 in 5000 males. It has been postulated that in our country
                    1300 children each year are born with hemophilia. And it is observed (calculated at 0.9 per 1,00,000) and estimated
                    (calculated at 4 per 1,00,000 population) prevalence of haemophilia A for states and union territories of India.
                </span><br/>
            </p>

            <div class="row">
                <div class="col-xs-6 col-lg-12">
                    <h2><span class="text-muted">Comparision among</span> affected countries</h2><br/>
                </div>
                <div class="col-lg-12">
                    <img class="img-responsive img-thumbnail" src="images/stat.png" alt="Generic placeholder image">
                </div>
            </div>
            <p class="text-justify">
                <br/>
                <span class="para">
                    (a) Hemophilia A trends in four high burden countries. Numbers in parenthesis show the number of patients reported in
                    the last five years by each country. (b) Per capita clotting factor VIII consumption (Y-axis) and number of haemophilia
                    patients reported in 2011 for the four high burden countries.
                </span><br/>
            </p>

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
