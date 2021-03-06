<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="sign up page">
    <meta name="author" content="shrishail sh">

    <title>Fist | Signup</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/signin.css">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            background-color: #525252;
        }

        a:hover {
            text-decoration: none;
        }

        .centered-form {
            margin-top: 0;
        }

        .centered-form .panel {
            background: rgba(255, 255, 255, 0.8);
            //box-shadow : rgba(0, 0, 0, 0.3) 20px 20px 20px;
        }

        input[type="text"], input[type="password"], input[type="email"] {
            height: 35px;
        }
    </style>
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
<?php include "header.php"; ?>
<div class="container marketing" id="container">
    <div class="row centered-form">
        <div class="col-md-6 col-sm-offset-3">
            <div>
                <?php
                if (isset($_POST['submit'])) {
                    //getting post variable
                    $fname = strip_tags($_POST['first_name']);
                    $lname = strip_tags($_POST['last_name']);
                    $email = strip_tags($_POST['email']);
                    $pass = strip_tags($_POST['password']);
                    $confirm_pass = strip_tags($_POST['c_password']);
                    $day = strip_tags($_POST['day']);
                    $month = strip_tags($_POST['month']);
                    $year = strip_tags($_POST['year']);
                    $birthday = $day . "-" . $month . "-" . $year;
                    $gender = strip_tags($_POST['sex']);
                    $error = array();
                    if (empty($fname)) {
                        $error[] = '<div class="alert alert-warning" role="alert">Please enter first name.</div>';
                    }
                    if (empty($lname)) {
                        $error[] = '<div class="alert alert-warning" role="alert">Please enter last name.</div>';
                    }
                    if (empty($email) or !filter_var($email, FILTER_SANITIZE_EMAIL)) {
                        $error[] = '<div class="alert alert-warning" role="alert">Email id is empty or invalid !</div>';
                    }
                    if (empty($pass)) {
                        $error[] = '<div class="alert alert-warning" role="alert">Please enter password.</div>';
                    }
                    if (empty($confirm_pass)) {
                        $error[] = '<div class="alert alert-warning" role="alert">Please enter Confirm password.</div>';
                    }
                    if (empty($year)) {
                        $error[] = '<div class="alert alert-warning" role="alert">Please enter birth date.</div>';
                    }
                    if (empty($gender)) {
                        $error[] = '<div class="alert alert-warning" role="alert">Please select gender.</div>';
                    }
                    if ($pass != $confirm_pass) {
                        $error[] = '<div class="alert alert-warning" role="alert">Password and Confirm password are not matching.</div>';
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
                            $count = $collection->findOne($query);

                            if (!count($count)) {
                                //Save the New user
                                $user_data = array('first_name' => $fname, 'last_name' => $lname, 'birthday' => $birthday, 'gender' => $gender, 'email' => $email, 'password' => md5($pass));
                                $collection->save($user_data);
                                echo '<div class="alert alert-success" role="alert">You entered all the details right.</div>';
                                header('Location:signin.php');
                            } else {
                                echo '<div class="alert alert-danger" role="alert">Email is already existed. Please register with another Email id !';
                            }

                        } else {
                            die("Database is not connected");
                        }
                    } else {
                        //Displaying the error
                        foreach ($error as $err) {
                            echo $err . '<br />';
                        }
                    }
                }
                ?>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Mark your footprint in Fist</strong>
                </div>
                <div class="panel-body">
                    <form role="form" action="signup.php" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <img class="profile-img"
                                         src="images/signin.png" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" id="first_name" class="form-control"
                                               placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name" id="last_name" class="form-control"
                                               placeholder="Last Name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control"
                                       placeholder="Email Address" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control"
                                               placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="c_password" id="c_password" class="form-control"
                                               placeholder="Confirm Password" required>
                                    </div>
                                </div>
                            </div>

                            <label for="birthdate">
                                Birth Date</label>

                            <div class="row">

                                <div class="col-xs-4 col-md-4">
                                    <label for="year"></label>
                                    <select name="year" id="year" class="form-control" onchange="displaydate()"
                                            required>
                                        <option value="">Year</option>
                                        <?php
                                        $year = date("Y");
                                        for ($i = $year, $j = 0; $j < 100; $j++, $year--) {
                                            echo '<option value="' . $year . '">' . $year . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <?php
                                $months = array('Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
                                $monthscount = count($months);
                                ?>
                                <div class="col-xs-4 col-md-4">
                                    <label for="month"></label>
                                    <select name="month" id="month" class="form-control" onchange="displaydate()"
                                            required>
                                        <option value="">Month</option>
                                        <?php
                                        for ($i = 0; $i < $monthscount; $i++) {
                                            echo '<option value="' . $months[$i] . '">' . $months[$i] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-xs-4 col-md-4">
                                    <label for="day"></label>
                                    <select name="day" id="day" class="form-control" disabled required>
                                        <option value="">Day</option>

                                    </select>
                                </div>
                            </div>
                            <br/>

                            <label class="radio-inline">
                                <input type="radio" name="sex" id="inlineCheckbox1" value="male" required>
                                Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="sex" id="inlineCheckbox2" value="female">
                                Female
                            </label>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Register"
                                               class="btn btn-lg btn-primary btn-block">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a href="signin.php">
                                            <input type="button" value="Signin"
                                                   class="btn btn-lg btn-primary btn-block">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
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
<?php include "footer.php"; ?>
</body>
</html>