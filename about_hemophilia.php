<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="shrishail sh">

    <title>Fist | About hemophilia</title>

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
                <h2 class="featurette-heading">What is <span class="text-muted">Hemophilia?</span></h2>

                <p class="lead text-justify">
                    Hemophilia is an inherited bleeding disorder in which the blood does not clot properly. This can
                    lead to
                    spontaneous bleeding as well as bleeding following injuries or surgery. Blood contains many proteins
                    called
                    clotting factors that can help to stop bleeding. People with hemophilia have low levels of either
                    factor VIII
                    (8) or factor IX (9). The severity of hemophilia that a person has is determined by the amount of
                    factor in the
                    blood. The lower the amount of the factor, the more likely it is that bleeding will occur which can
                    lead to
                    serious health problems. </p>
            </div>


            <div class="row featurette">
                <div class="col-md-7">
                    <h2>Causes of hemophilia</h2>

                    <p class="text-justify">
                        <span class="para">
                            Hemophilia is caused by a mutation or change, in one of the genes, that provides instructions for making
                            the clotting factor proteins needed to form a blood clot.  This change or mutation can prevent the clotting
                            protein from working properly or to be missing altogether. These genes are located on the X chromosome. Males
                            have one X and one Y chromosome (XY) and females have two X chromosomes (XX). Males inherit the X chromosome
                            from their mothers and the Y chromosome from their fathers. Females inherit one X chromosome from each parent.
                        </span><br/>
                        <span class="para">
                            The X chromosome contains many genes that are not present on the Y chromosome. This
                            means that males only have one copy of most of the genes on the X chromosome, whereas females have 2
                            copies. Thus, males can have a disease like hemophilia if they inherit an affected X chromosome that has
                            a mutation in either the factor VIII or factor IX gene.
                        </span><br/>
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive img-thumbnail" src="images/hgenes.jpg"
                         alt="Generic placeholder image">
                </div>
            </div>
            <p class="text-justify">
            <span class="para">
                Females can also have hemophilia, but this is much rarer. In such cases both X chromosomes are affected or one is
                affected and the other is missing or inactive. In these females, bleeding symptoms may be similar to males with
                hemophilia. A female with one affected X chromosome is a "carrier" of hemophilia. Sometimes a female who is a
                carrier can have symptoms of hemophilia. In addition, she can pass the affected X chromosome with the clotting
                factor gene mutation on to her children.
            </span><br/>
            <span class="para">
                Even though hemophilia runs in families, some families have no prior history of family members with hemophilia.
                Sometimes, there are carrier females in the family, but no affected boys, just by chance. However, about one-third
                of the time, the baby with hemophilia is the first one in the family to be affected with a mutation in the gene
                for the clotting factor.
            </span>
            </p>

            <div class="row">
                <div class="col-xs-6 col-lg-12">
                    <h2>Types</h2>

                    <div class="text-justify">
                        There are several different types of hemophilia. The following two are the most common:
                        <ul>
                            <li>
                                Hemophilia A (Classic Hemophilia)<br/>
                                This type is caused by a lack or decrease of clotting factor VIII.
                            </li>
                            <li>
                                Hemophilia B (Christmas Disease)<br/>
                                This type is caused by a lack or decrease of clotting factor IX.
                            </li>
                    </div>
                </div>
                <!--/.col-xs-6.col-lg-4-->
            </div>
            <!--/row-->

            <div class="row">
                <div class="col-xs-6 col-lg-12">
                    <h2>Signs and Symptoms</h2>

                    <div class="text-justify">
                        Common signs of hemophilia include:
                        <ul class="text-justify">
                            <li>
                                Bleeding into the joints. This can cause swelling and pain or tightness in the joints;
                                it often affects the knees, elbows, and ankles.
                            </li>
                            <li>
                                Bleeding into the skin (which is bruising) or muscle and soft tissue causing a build-up
                                of blood in the area (called a hematoma).
                            </li>
                            <li>
                                Bleeding of the mouth and gums, and bleeding that is hard to stop after losing a tooth.
                            </li>
                            <li>
                                Bleeding after circumcision (surgery performed on male babies to remove the hood of
                                skin,
                                called the foreskin, covering the head of the penis).
                            </li>
                            <li>
                                Bleeding after having shots, such as vaccinations.
                            </li>
                            <li>
                                Bleeding in the head of an infant after a difficult delivery.
                            </li>
                            <li>
                                Blood in the urine or stool.
                            </li>
                            <li>
                                Frequent and hard-to-stop nosebleeds.
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/.col-xs-6.col-lg-4-->
            </div>
            <!--/row-->

            <div class="row">
                <div class="col-xs-6 col-lg-12">
                    <h2>Diagnosis</h2>

                    <div class="text-justify">
                    <span class="para">
                        Many people who have or have had family members with hemophilia will ask that their baby boys get
                        tested soon after birth. About one-third of babies who are diagnosed with hemophilia have a new
                        mutation not present in other family members. In these cases, a doctor might check for hemophilia
                        if a newborn is showing certain signs of hemophilia. To make a diagnosis, doctors would perform
                        certain blood tests to show if the blood is clotting properly. If it does not, then they would do
                        clotting factor tests, also called factor assays, to diagnose the cause of the bleeding disorder.
                        These blood tests would show the type of hemophilia and the severity.
                    </span>
                    </div>
                </div>
                <!--/.col-xs-6.col-lg-4-->
            </div>
            <!--/row-->

            <div class="row">
                <div class="col-xs-6 col-lg-12">
                    <h2>Treatment</h2>

                    <div class="text-justify">
                        <span class="para">
                            The best way to treat hemophilia is to replace the missing blood clotting factor so that the blood
                            can clot properly. This is done by infusing (administering through a vein) commercially prepared
                            factor concentrates.  People with hemophilia can learn how to perform these infusions themselves so
                            that they can stop bleeding episodes and, by performing the infusions on a regular basis, can even
                            prevent most bleeding episodes.
                        </span><br/>
                        <span class="para">
                            The best way to treat hemophilia is to replace the missing blood clotting factor so that the blood
                            can clot properly. This is done by infusing (administering through a vein) commercially prepared
                            factor concentrates.  People with hemophilia can learn how to perform these infusions themselves so
                            that they can stop bleeding episodes and, by performing the infusions on a regular basis, can even
                            prevent most bleeding episodes.
                        </span><br/>
                        <span class="para">
                            Good quality medical care from doctors and nurses who know a lot about the disorder can help prevent
                            some serious problems. Often the best choice for care is to visit a comprehensive Hemophilia Treatment
                            Center (HTC). An HTC not only provides care to address all issues related to the disorder, but also
                            provides health education that helps people with hemophilia stay healthy.
                        </span>
                    </div>
                </div>
                <!--/.col-xs-6.col-lg-4-->
            </div>
            <!--/row-->

            <div class="row">
                <div class="col-xs-6 col-lg-12">
                    <h2>Prevention</h2>

                    <div class="text-justify">
                    <span class="para">
                        If there is a family history of haemophilia, you can test the infant at birth or can even before birth,
                        in the first three months of pregnancy (with Chorionic villous sampling or amniocentesis).
                    </span><br/>
                    <span class="para">
                        Severe Haemophilia is diagnosed by one year of age and the diagnosis is confirmed after a panel of
                        coagulation profile is conducted on the patient’s blood. Lab results which indicate hemophilia include:
                    </span><br/>
                        <ul class="text-justify">
                            <li>
                                Normal platelet count
                            </li>
                            <li>
                                Normal bleeding time
                            </li>
                            <li>
                                Normal prothrombin time (PT)
                            </li>
                            <li>
                                Normal thrombin time (TT)
                            </li>
                            <li>
                                Prolonged activated thromboplastin time
                            </li>
                            <li>
                                Low level of clotting factors VIII or IX
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/.col-xs-6.col-lg-4-->
            </div>
            <!--/row-->

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
