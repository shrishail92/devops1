<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Home page">
    <meta name="author" content="shrishail sh">
    <title>Fist | Home</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
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
<?php
if (isset($_SESSION['user'])) {
    include('headerlogin.php');
} else {
    include('header.php');
}
?>
<div class="container marketing" id="container">

    <!--<hr class="featurette-divider">-->
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide slider" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/helping-hand.jpg" alt="First slide">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>For the People and By the People</h1>

                        <p>Are you in need of help? Do you want to help to the people and be an active social worker?
                            click the link below to join us.</p>

                        <p><a class="btn btn-lg btn-primary" href="signup.php" role="button">Sign up now <i class="glyphicon glyphicon-hand-right"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/hemo.jpg" alt="Second slide">

                <div class="container">
                    <div class="carousel-caption">
                        <h1></h1>

                        <p>To Know more about hemophilia. click the link below.</p>

                        <p><a class="btn btn-lg btn-primary" href="about_hemophilia.php" role="button"> <i class="fa fa-arrow-circle-right"></i> Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/b.jpg" alt="Third slide">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Donate the Blood & Save a Life</h1>

                        <p>
                            <!--If you’re a blood donor, you’re a hero to someone, somewhere, who received your gracious gift of life.-->
                            Five minutes of your time + 350 ml. of your blood = One life saved. Click the link below to
                            register for donation.
                        </p>

                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Donate blood <i class="glyphicon glyphicon-tint"></i> </a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /.carousel -->

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


    <hr class="featurette-divider-small">
    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle" src="images/vision.jpg" alt="Generic placeholder image">

            <h2>Dream to make true</h2>

            <p>Hemophilia without disability, Children free of pain
                by creating awareness among Doctors and patients and Public in proper Hemophilia care.</p>
            <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="images/mission.jpg" alt="Generic placeholder image">

            <h2>Our Aim to achieve</h2>

            <p>
                To educate and provide proper information on Hemophilia Care to
                both Persons with Hemophilia, their families and the medical fraternity.
            </p>
            <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="images/objectives.jpg" alt="Generic placeholder image">

            <h2>Milestones to take on</h2>

            <p>
                To locate undiagnosed “Persons with Hemophilia (PWH)”
                and also to make treatment available to them at affordable or free of cost.
            </p>
            <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider-small">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Support Us <span class="text-muted">to fight against hemophilia.</span></h2>

            <p class="lead text-justify">
                <span class="para">
                    You Can Be Part of the Solution! Yeah, it is absolutely true that you can support
                    the awareness events we conduct for people, patients and their family by actively taking part in hempohilia walk, blood donation
                    campaigns and other activities.
                </span><br/>
                <span class="para">
                    We are really happy to see you being an active supporter to fight against
                    himophilia, the deadly disease. Come on let us all work together and save thousands of lives. You will be informed at the time of events.
                </span>
            </p>
            <center>
                <p>
                    <a class="btn btn-info" href="signup.php" role="button">Join Us Now <i class="glyphicon glyphicon-leaf"></i> </a>
                </p>
            </center>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive" src="images/get_involved.png" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-5">
            <img class="featurette-image img-responsive" src="images/volunteer.png" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
            <h2 class="featurette-heading">Enrich your life <span class="text-muted">by serving others.</span></h2>

            <p class="lead text-justify">
                <span class="para">
                    Our mission is to find better treatments and cures for bleeding and clotting disorders and to
                    preventing the complications of these disorders through education, advocacy and research.
                </span><br/>
                <span
                    class="para">We can only reach our
                    mission through the dedication of talented people. We deeply value the contributions of our volunteers and are committed to ensuring a
                    positive experience by carefully matching your skills.
               </span>
            </p>
            <center>
                <p>
                    <a class="btn btn-info" href="#" role="button">Become Volunteer <i class="glyphicon glyphicon-hand-up"></i> </a>
                </p>
            </center>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Donate Money<span class="text-muted"> and save the lives.</span></h2>

            <p class="lead text-justify">
                <span class="para">Bleeding disorders like hemophilia are extremely costly conditions.
                The lives of those affected are often filled with chronic pain and stress which can take a tremendous toll on the
                families.</span> <br/>
                <span class="para">
                    By supporting <abbr title="Future India Social Trust" class="initialism">FIST</abbr>,
                    you help educate, empower, and support these families.
                </span><br/>
                <span class="para">
                    Your tax deductible contribution will be used to improve our programs, services, and community outreach
                resources to men, women and children with bleeding disorders.
                </span></p>
            <p class="text-center"><a class="btn btn-info" href="#" role="button">Donate Now <i class="glyphicon glyphicon-circle-arrow-right"></i> </a></p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive" src="images/donation-money.png"
                 alt="Generic placeholder image">
        </div>
    </div>

    <!-- /END THE FEATURETTES -->


</div>
<!-- /.container -->

<?php include 'footer.php'; ?>
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
