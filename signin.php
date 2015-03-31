<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="shrishail sh">

    <title>Fist | Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

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
  	<div class="container marketing" id="container">
  		<div class="row">
  			<div class="col-sm-6 col-md-4 col-md-offset-4">
          <div>
            <?php 
              if($_POST['submit'])
              {
                //getting post variable
                $email=strip_tags($_POST['email']);
                $pass=strip_tags($_POST['password']);

                $error = array();

                if(empty($email) or !filter_var($email,FILTER_SANITIZE_EMAIL))
                {
                  $error[] = "<div class=\"alert alert-warning\" role=\"alert\">Email id is empty or invalid !</div>";
                }
                if(empty($pass))
                {
                  $error[] = "<div class=\"alert alert-warning\" role=\"alert\">Please enter password.</div>";
                }
                           
                if(count($error)==0)
                {
             
                        //database configuration
                        $host = 'localhost';  
                        $database_name = 'FIST';
                        $database_user_name = '';  
                        $database_password = '';  
             
                        //if you have database user name & password then connection may be
                        //$connection=new Mongo("mongodb://$database_user_name:$database_password@$dbhost");
             
                        //Currently we are connecting to mongodb without authentication
                        try
                        {
                          $connection = new MongoClient();
                        }
                        catch(MongoConnectionException $connectionException)
                        {
                          print $connectionException;
                          exit;
                        }
             
                        //checking the mongo database connection
                        if($connection)
                        {
                          //connecting to database
                          $databse=$connection->$database_name;
             
                          //connect to specific collection
                          $collection=$databse->user_accounts;
             
                          $query=array('email'=>$email);
                          //checking for existing user
                          $user=$collection->findOne($query);

                          if(($user['email']==$email) && ($user['password']==md5($pass)))
                          {
                            echo "<div class=\"alert alert-success\" role=\"alert\">successful login</div>";
                          }
                          else 
                          {
                            echo "<div class=\"alert alert-danger\" role=\"alert\">username or password is wrong !</div>";
                          }
                        }
                }
              }
            ?>
          </div>
  				<h1 class="text-center login-title">Sign in to continue to FIST</h1>
  				<div class="account-wall">
  					<img class="profile-img" src="images/signin.png" alt="">
  					<form role="form" action="signin.php" class="form-signin" method="post">
  						<input type="text" name="email" class="form-control" placeholder="Email" required autofocus/>
  						<input type="password" name="password" class="form-control" placeholder="Password" required/>
  						<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Sign in"/>
  						<label class="checkbox pull-left">
  						<input type="checkbox" value="remember-me">
  						Remember me
  						</label>
  						<a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
  					</form>
  				</div>
  				<a href="signup.php" class="text-center new-account">Create an account </a>
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
  </body>
</html>