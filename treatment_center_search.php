<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon.png">

    <title>Fist | Treatment Centers</title>

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
            <h2 class="featurette-heading">Hemophilia <span class="text-muted">Treatment Centres</span></h2>
            <p class="lead text-justify">
              Welcome to the Hemophilia Treatment Centre Directory, a directory of hemophilia treatment centres (HTCs) in India. 
              It is a useful resource for people who are travelling to other states and as a directory of hemophilia treaters 
              around the country. 
            </p>
          </div>
          <div class="row">
            <div class="col-xs-6 col-lg-12">
              <h2>Search the Hemophilia Treatment Centre Directory, India</h2>
              <p class="text-justify"><span class="para">
                You can use the various search features to get a list of all the centres in the state you will be visiting. 
                This directory is updated daily (as changes are received). Please send corrections if any to 
                fist4hemophilia@writeme.com
              </span></p>
            </div>
          </div>
          <hr class="featurette-divider-small">
          <div class="row featurette">

            <form role="form" action="treatment_center_display.php" method="post" target="_blank">
              <div class="col-xs-6">
                <div class="form-group">
                  <label for="state">State:</label>
                  <?php
                      $states = array( "Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu & Kashmir","Jharkhand","Karnataka","Kerala","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Orissa","Punjab","Rajasthan","Sikkim","Tamil Nadu","Telangana","Tripura","Uttar Pradesh","Uttarakhand","West Bengal" );
                      $arrlength = count($states);
                  ?>
                  <select class="form-control" name="state" id="state" onchange="enablecity()">
                    <option value="">Select a state...</option>
                    <?php
                      for($i = 0; $i <  $arrlength; $i++) 
                      {
                        echo '<option value="'.$states[$i].'">'.$states[$i].'</option>';
                      }
                    ?>
                  </select>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <label for="city">City:</label>
                  <select class="form-control" name="city" id="city">
                    <option value="">Select a city...</option>
                    
                  </select>
                </div>
              </div>
              <div class="col-xs-6">
                <input type="submit" value="search" name="searchtc" class="btn btn-default"/>
              </div>
            </form>

          </div><!--/.col-xs-6.col-lg-4-->  

          <hr class="featurette-divider-small">

          <div class="row">
            <div class="col-xs-6 col-lg-12"> 
              
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
