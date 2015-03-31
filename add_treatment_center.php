<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fist | Add Treatment Center</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php include "header.php" ?>
    <div class="container marketing" id="container">
      
      <div class="row row-offcanvas row-offcanvas-right">
        
        <div class="col-xs-12 col-sm-9">
          <h2>Add a Treatment Center</h2>
          <div class="row">
            <div class="col-xs-6">
            
              <form role="form" action="add_treatment_center.php" method="post">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter name of doctor or hospital"/>
                </div>
                <div class="form-group">
                  <label for="address">Address:</label>
                  <textarea class="form-control" name="address" placeholder="Enter address"></textarea>
                </div>
                <div class="form-group">
                  <label for="state">State:</label>
                  <?php
                      $states = array( "Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu & Kashmir","Jharkhand","Karnataka","Kerala","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Orissa","Punjab","Rajasthan","Sikkim","Tamil Nadu","Telangana","Tripura","Uttar Pradesh","Uttarakhand","West Bengal" );
                      $arrlength = count($states);
                  ?>
                  <select class="form-control" name="state">
                    <option>Select a state...</option>
                    <?php
                      for($i = 0; $i <  $arrlength; $i++)
                      {
                        echo '<option value="'.$states[$i].'">'.$states[$i].'</option>';
                      }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="city">City:</label>
                  <input type="text" class="form-control" name="city" placeholder="Enter city"/>
                </div>
                <div class="form-group">
                  <label for="pincode">Pincode:</label>
                  <input type="text" class="form-control" name="pincode" placeholder="Enter pincode"/>
                </div>
                <div class="form-group">
                  <label for="contact">Contact person:</label>
                  <input type="text" class="form-control" name="contact" placeholder="Enter contact person name"/>
                </div>
                <div class="form-group">
                  <label for="phone">Phone number:</label>
                  <input type="text" class="form-control" name="phone" placeholder="Enter phone number"/>
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter email id"/>
                </div>
                <div class="form-group">
                  <label for="fax">Fax:</label>
                  <input type="text" class="form-control" name="fax" placeholder="Enter fax number"/>
                </div>
                <input type="submit" value="submit" name="save" class="btn btn-default"/>
              </form>
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

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script src="/jsoffcanvas.js"></script>
    <?php include 'footer.php'; ?>
  </body>
  <?php
    if(isset($_POST['save']))
    {
      $name=$_POST['name'];
      $address=$_POST['address'];
      $state=$_POST['state'];
      $city=$_POST['city'];
      $pincode=$_POST['pincode'];
      $contact=$_POST['contact'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $fax=$_POST['fax'];
      
      // connect to mongodb
      try
      {
        $m = new MongoClient();
      }
      catch(MongoConnectionException $connectionException)
      {
        print $connectionException;
        exit;
      }
      $db = $m->FIST;
      $collection = $db->treatment_centers;
      $document = array( 
        "name" => "$name", 
        "address" => "$address", 
        "state" => "$state",
        "city" => "$city",
        "pincode" => "$pincode",
        "contact" => "$contact",
        "phone" => "$phone",
        "email" => "$email",
        "fax" => "$fax"
      );
      $document=array_filter($document);
      $collection->insert($document);
      ?>
      <script type="text/javascript">
        alert('inserted successfully');
      </script>
      <?php
    }
  ?>
</html>