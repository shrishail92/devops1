<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon.png">

    <title>Fist | Videos for hemophilia</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php include "header.php" ?>
    <div class="container marketing" id="container">
      
      <div class="row row-offcanvas row-offcanvas-right">
        
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h2 class="featurette-heading">Videos for <span class="text-muted">hemophilia</span></h2>
            <p class="lead text-justify">
            This section contains the videos for providing education and creating awareness about hemophilia in patients and their family, doctors, and people. And this also contains videos for treatment of hemophilia.
            </p>
          </div>

          <br/>

          <div class="row featurette">
            <div class="col-xs-6">
              <div class="thumbnail">
                <video width="370" height="240" controls class="featurette-image img-responsive img-thumbnail">
                  <source src="hemo_videos/Hemophilia a educational video.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video> 
                <div class="caption">
                  <p>Hemophilia an educational video</p>
                </div>
              </div>
              <br/>
              <center><p><a class="btn btn-info" href="hemo_videos/Hemophilia a educational video.mp4" role="button" download>Download <i class="glyphicon glyphicon-download"></i></a></p></center>
            </div>
            <div class="col-xs-6">
              <div class="thumbnail">
                <video width="370" height="240" controls class="featurette-image img-responsive img-thumbnail">
                  <source src="hemo_videos/Hemophilia awareness Video! Hemophilia Federation (India).mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video> 
                <div class="caption">
                  <p>Hemophilia awareness Video! (HFI)</p>
                </div>
              </div>
              <br/>
              <center><p><a class="btn btn-info" href="hemo_videos/Hemophilia awareness Video! Hemophilia Federation (India).mp4" role="button" download>Download <i class="glyphicon glyphicon-download"></i></a></p></center>
            </div>
          </div>

          <hr class="featurette-divider">
          
          <div class="row featurette">
            <div class="col-xs-6">
              <div class="thumbnail">
                <video width="370" height="240" controls class="featurette-image img-responsive img-thumbnail">
                  <source src="hemo_videos/Children with Hemophilia.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video> 
                <div class="caption">
                  <p>Children with Hemophilia</p>
                </div>
              </div>
              <br/>
              <center><p><a class="btn btn-info" href="hemo_videos/Children with Hemophilia.mp4" role="button" download>Download <i class="glyphicon glyphicon-download"></i></a></p></center>
            </div>
            <div class="col-xs-6">
              <div class="thumbnail">
                <video width="370" height="240" controls class="featurette-image img-responsive img-thumbnail">
                  <source src="hemo_videos/A Moms Promise to Her Son with Hemophilia.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video> 
                <div class="caption">
                  <p>A Moms Promise to Her Son with Hemophilia</p>
                </div>
              </div>
              <br/>
              <center><p><a class="btn btn-info" href="hemo_videos/A Moms Promise to Her Son with Hemophilia.mp4" role="button" download>Download <i class="glyphicon glyphicon-download"></i></a></p></center>
            </div>
          </div>

        </div><!--/.col-xs-12.col-sm-9-->

        <?php include "sidebar_menu.php"; ?>
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <?php include("fb_like_box.php") ?>
          </div>
        </div>

      </div><!--/row-->

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script src="offcanvas.js"></script>
    <?php include 'footer.php'; ?>
  </body>
</html>
