<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="sign in page">
    <meta name="author" content="shrishail sh">

    <title>Fist | Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

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
<div class="container marketing" id="container" style="margin-top:0px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <?php
            if (isset($_POST['signin'])) {
                //getting post variable
                $email = strip_tags($_POST['email']);
                $pass = strip_tags($_POST['password']);
                $error = array();
                if (empty($email) or !filter_var($email, FILTER_SANITIZE_EMAIL)) {
                    $error[] = '<div class="alert alert-warning" role="alert">Email id is empty or invalid <i class="glyphicon glyphicon-exclamation-sign"></i> </div>';
                }
                if (empty($pass)) {
                    $error[] = '<div class="alert alert-warning" role="alert">Please enter password.</div>';
                }
                if (count($error) == 0) {
                    //database configuration
                    $host = 'localhost';
                    $database_name = 'FIST';
                    $database_user_name = '';
                    $database_password = '';
                    //if you have database user name & password then connection may be
                    //$connection=new Mongo("mongodb://$database_user_name:$database_password@$dbhost");
                    //Currently we are connecting to mongodb without authentication
                    try {
                        $connection = new MongoClient();
                    } catch (MongoConnectionException $connectionException) {
                        print $connectionException;
                        exit;
                    }
                    //checking the mongo database connection
                    if ($connection) {
                        //connecting to database
                        $databse = $connection->$database_name;

                        //connect to specific collection
                        $collection = $databse->user_accounts;

                        $query = array('email' => $email);
                        //checking for existing user
                        $user = $collection->findOne($query);

                        if (($user['email'] == $email) && ($user['password'] == md5($pass))) {
                            echo '<div class="alert alert-success" role="alert"> successful login <i class="glyphicon glyphicon-ok-circle"></i> </div>';
                            $username = $user['first_name'];
                            $username .= ' ' . $user['last_name'];
                            $_SESSION['user'] = $username;
                            header('Location:home.php');
                        } else {
                            echo '<div class="alert alert-danger" role="alert">username or password is wrong !</div>';
                        }
                    }
                }
            }
            ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Sign in to continue</strong>
                </div>
                <div class="panel-body">
                    <form role="form" action="signin.php" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <img class="profile-img"
                                         src="images/signin.png" alt="signin image">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                              <span class="input-group-addon">
                                                  <i class="glyphicon glyphicon-envelope"></i>
                                              </span>
                                            <input class="form-control" placeholder="User email" name="email"
                                                   type="email" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                              <span class="input-group-addon">
                                                  <i class="glyphicon glyphicon-lock"></i>
                                              </span>
                                            <input class="form-control" placeholder="Password" name="password"
                                                   type="password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="signin" class="btn btn-lg btn-primary btn-block"
                                               value="Sign in">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <input type="checkbox" value="remember-me">
                                    Remember me
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
                <div class="panel-footer ">
                    <a href="#" class="pull-right">Forgot password? </a>
                    <a href="signup.php" onClick=""> Sign Up Here </a>
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
</body>
<?php include "footer.php" ?>
</html>