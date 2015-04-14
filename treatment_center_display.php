<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hemophilia Treatment Centers">
    <meta name="author" content="shrishail sh">

    <title>Fist | Treatment Centers</title>

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

        <div class="row">
            <div class="col-lg-12">
                <h2><span class="text-muted">Search results of</span> Hemophilia Treatment Centre Directory, India</h2>

                <div class="text-justify"><span>
                <span class="alert alert-info" role="alert">
                    You searched for the treatments centres of state <b><?php echo $_POST['state']; ?></b> and city
                    <b><?php echo $_POST['city']; ?></b>.
                </span>
                See results displayed below.
              </span></div>
            </div>
        </div>

        <hr class="featurette-divider-small">

        <div class="row featurette">
            <div class="col-lg-12">
                <?php
                if (isset($_POST['searchtc'])) {
                    $state = $_POST['state'];
                    $city = $_POST['city'];
                    try {
                        $m = new MongoClient();
                    } catch (MongoConnectionException $connectionException) {
                        print $connectionException;
                        exit;
                    }
                    $data = '<div class="table-responsive">';
                    $data .= '<table class="table table-striped table-hover" style="background:#fff;">';
                    $data .= '<thead>';
                    $data .= '<tr>';
                    $data .= '<th>Name</th>';
                    $data .= '<th>Address</th>';
                    $data .= '<th>City</th>';
                    $data .= '<th>Pincode</th>';
                    $data .= '<th>Contact Person</th>';
                    $data .= '<th>Phone</th>';
                    $data .= '<th>Email</th>';
                    $data .= '</tr>';
                    $data .= '</thead>';
                    $data .= '<tbody>';
                    try {
                        $db = $m->FIST;
                        $collection = $db->treatment_centers;
                        $cursor = $collection->find(array('state' => $state, 'city' => $city));

                        // How many results found
                        $num_docs = $cursor->count();

                        if ($num_docs > 0) {
                            echo '<div class="alert alert-success" role="alert">Success : $num_docs results found for your search criteria.</div>';
                            // iterate cursor to display title of documents
                            foreach ($cursor as $document) {
                                $data .= '<tr>';
                                $data .= '<td>' . $document['name'] . '</td>';
                                $data .= '<td>' . $document['address'] . '</td>';
                                $data .= '<td>' . $document['city'] . '</td>';
                                $data .= '<td>' . $document['pincode'] . '</td>';
                                $data .= '<td>' . $document['contact'] . '</td>';
                                $data .= '<td>' . $document['phone'] . '</td>';
                                $data .= '<td>' . $document['email'] . '</td>';
                                $data .= '</tr>';
                            }
                            $data .= '</tbody>';
                            $data .= '</table></div>';
                            echo $data;
                        } else {
                            echo '<div class="alert alert-danger" role="alert">Sorry! No results found for your search criteria. Try again...</div>';
                        }
                    } catch (MongoException $mongoException) {
                        print $mongoException;
                        exit;
                    }
                }
                ?>
            </div>
        </div>

        <hr class="featurette-divider-small">
        <div class="col-xs-1">
            <div class="form-group">
                <a href="treatment_center_search.php" style="text-decoration:none;">
                    <input type="button" value="Back" class="btn btn-default btn-block">
                </a>
            </div>
        </div>

    </div>
    <!-- /.container -->
</div>

<?php include 'footer.php'; ?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/offcanvas.js"></script>
</body>
</html>