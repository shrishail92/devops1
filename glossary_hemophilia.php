<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Glossary of hemophilia">
    <meta name="author" content="shrishail sh">

    <title>Fist | Glossary of hemophilia</title>

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
  <?php
  if(isset($_SESSION['user']))
  {
      include('headerlogin.php');
  }
  else
  {
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
            <h2 class="featurette-heading">Glossary for <span class="text-muted">Hemophilia</span></h2>
            <p class="lead text-justify">
            Here you will find a list of terms to help you decode definitions and descriptions of bleeding disorders and related conditions. This glossary will help make hemophilia with inhibitors less confusing. If you find a word you do not know on this website, come to this page. I am just including the words you might come across on this hemophilia site.
            </p>
          </div>
          <br/>
          <div class="row">
            <div class="col-lg-12">
            <figure>
              <img class="img-responsive img-thumbnail" src="images/glossary.jpg" alt="Generic placeholder image">
              <figcaption>Words with thier respective meanings are given below.</figcaption>
            </figure>
            </div>
          </div>
          <hr width="0">      
          <div class="row">
            <div class="col-xs-6 col-lg-12">
                <ul class="text-justify">
                <li><span class="text-primary">hemophilia</span> - A bleeding disorder in which a clotting factor protein, such as factor VIII or IX, is completely or partially lacking or does not function normally.</li>
                <li><span class="text-primary">hemophilia A</span> - a deficiency or absence of factor VIII. The most common form of hemophilia, also called “classic hemophilia.”</li>
                <li><span class="text-primary">hemophilia B</span> - a deficiency or absence of factor IX. Also called “Christmas disease” after the first family diagnosed with the condition.</li>
                <li><span class="text-primary">hemophilia C</span> - also called factor XI deficiency. Patients are deficient in or lack factor XI protein.</li>
                <li><span class="text-primary"><abbr title="Acquired Immunodeficiency Syndrome" class="initialism">AIDS</abbr>
                </span> - a disease caused by the human immunodeficiency virus (HIV), which attacks the body’s immune system, making it more prone to certain infections and rare cancers.</li>
                <li><span class="text-primary">anemia</span> - a condition in which the blood is deficient in red blood cells, in hemoglobin (the iron-carrying component) or in total volume from loss of blood.</li>
                <li><span class="text-primary">Bethesda unit</span> - a laboratory measurement of an antibody, called an inhibitor. Values above 5 are considered high; the inhibitor is powerful and weakens the effect of clotting factor.</li>
                <li><span class="text-primary">biopsy</span> - a procedure in which samples of tissues, cells or fluid are removed for examination. Liver biopsies reveal the extent of damage from cirrhosis, or scarring.</li>
                <li><span class="text-primary">biosimilars</span> - new versions of existing drugs, created once the current patent expires.
                </li>
                <li><span class="text-primary">bleeding disorders</span> - several chronic health conditions in which the body does not clot properly, resulting in excessive or lengthy bleeding.</li>
                <li><span class="text-primary">breakthrough bleed</span> - bleeding between infusions of factor product.</li>
                <li><span class="text-primary">carrier</span> - a person who has the gene for a condition, but does not necessarily display the symptoms.</li>
                <li><span class="text-primary">asymptomatic carrier</span> - a person without symptoms of a condition.</li>
                <li><span class="text-primary">symptomatic carrier</span> - a person who has low factor levels and displays bleeding symptoms.</li>
                <li><span class="text-primary">central venous access device (CVAD)</span> - a small, flexible tube placed in a vein for patients who need regular infusions.</li>
                <li><span class="text-primary">chromosome</span> - structures in the cell’s nucleus that contain genetic information in the form of DNA.</li>
                <li><span class="text-primary">cirrhosis</span> - deterioration of the liver from excessive scarring.</li>
                <li><span class="text-primary">clotting cascade</span> - a series of steps that occur in the formation of a clot, involving the clotting proteins and other substances.</li>
                <li><span class="text-primary">clotting disorders</span> - conditions in which there is an increased tendency toward excessive clotting.</li>
                <li><span class="text-primary">clotting factors</span> - proteins in the blood that act in sequence to stop bleeding and form a clot.</li>
                <li><span class="text-primary">coagulation</span> - the process of forming a blood clot.</li>
                <li><span class="text-primary">coagulation disorders</span> - several chronic health conditions in which the body does not clot properly, resulting in excessive or lengthy bleeding.</li>
                <li><span class="text-primary">co-infection</span> - having two viral infections at the same time, particularly HIV and hepatitis C virus (HCV).</li>
                <li><span class="text-primary">Creutzfeldt-Jakob disease (CJD)</span> - an incurable degenerative brain disease that is fatal. It is caused by a prion, a protein particle that causes infectious diseases of the nervous system.</li>
                <li><span class="text-primary">variant Creutzfeldt-Jakob disease (vCJD)</span> - the human form of CJD, or “mad cow disease.”</li>
                <li><span class="text-primary">cryoprecipitate</span> - a frozen form of concentrated plasma discovered by Dr. Judith Graham Pool in 1965.</li>
                <li><span class="text-primary">DDAVP</span> - desmopressin acetate, a synthetic hormone used to treat some patients with mild hemophilia or von Willebrand disease.</li>
                <li><span class="text-primary">deep vein thrombosis (DVT)</span> - a blood clot in a vein deep in the body, usually in the lower leg or thigh.</li>
                <li><span class="text-primary">desmopressin acetate (also DDAVP or Stimate®)</span> - a synthetic hormone used to treat some patients with mild hemophilia or von Willebrand disease.</li>
                <li><span class="text-primary">DNA (deoxyribonucleic acid)</span> - the molecular basis of heredity. The order of the four bases that compose DNA</span> - adenine, cytosine, guanine and thymine</span> - provides information on cell activity.</li><li><span class="text-primary">end-stage liver disease</span> - irreversible damage to the liver that can end in liver failure. It is caused by chronic cirrhosis.</li>
                <li><span class="text-primary">factor assay</span> - a lab test that determines the level of circulating factor in the body. The results are reported as a percentage of normal levels.</li>
                <li><span class="text-primary">factor product</span> - treatment that is infused to replace the body’s missing clotting proteins. It is made from plasma or recombinant products.</li>
                <li><span class="text-primary">factor deficiencies</span> - bleeding disorders identified by the missing clotting factor. They include factors I, II, V, VII, VIII, IX, X, XI, XII and XIII.</li>
                <li><span class="text-primary">factor I deficiency</span> - a rare bleeding disorder caused by deficient or defective fibrinogen.</li>
                <li><span class="text-primary">factor II deficiency</span> - an extremely rare bleeding disorder caused by a deficiency of prothrombin.</li>
                <li><span class="text-primary">factor V deficiency</span> - a rare bleeding disorder caused by a deficiency of factor V protein.</li>
                <li><span class="text-primary">factor VII deficiency</span> - the most common rare bleeding disorder, caused by a deficiency of factor VII protein. It is usually severe.</li>
                <li><span class="text-primary">factor VIII deficiency</span> - also called hemophilia A.</li>
                <li><span class="text-primary">factor IX deficiency</span> - also called hemophilia B.</li>
                <li><span class="text-primary">factor X deficiency</span> - a rare bleeding disorder caused by a deficiency of factor X protein, which activates enzymes that help form a clot.</li>
                <li><span class="text-primary">factor XI deficiency</span> - also called hemophilia C.</li>
                <li><span class="text-primary">factor XII deficiency</span> - a rare bleeding disorder. Most people who have it do not experience bleeds.</li>
                <li><span class="text-primary">factor XIII deficiency</span> - the rarest bleeding disorder, caused by the deficiency of factor VIII protein, which stabilizes the clot.</li>
                <li><span class="text-primary">fibrosis</span> - the accumulation of tough, fibrous scar tissue in the liver. It is measured by stages or grades.</li>
                <li><span class="text-primary">fresh frozen plasma</span> - the liquid portion of the blood. It is used to treat bleeding in patients with rare factor deficiencies, such as factors II, V, VII, IX, X and XI.</li>
                <li><span class="text-primary">gene</span> - a sequence of DNA that occupies a specific location on a chromosome and determines a particular characteristic.</li>
                <li><span class="text-primary">gene therapy</span> - replacing, manipulating or supplementing a dysfunctional gene with a functional one.</li>
                <li><span class="text-primary">half-life</span> - the time it takes for half the quantity of factor or factor product to be eliminated from blood plasma.</li>
                <li><span class="text-primary">hemarthrosis</span> - bleeding into a joint.</li>
                <li><span class="text-primary">hematologist</span> - a physician specializing in disorders of the blood.</li>
                <li><span class="text-primary">hemoglobin</span> - the protein in red blood cells that contains iron and carries oxygen and carbon dioxide.</li>
                <li><span class="text-primary">mild hemophilia</span> - a factor VIII or IX level ranging from 5% up to 50% of normal blood levels.</li>
                <li><span class="text-primary">moderate hemophilia</span> - a factor VIII or IX level ranging from 1% up to 5% of normal blood levels.</li>
                <li><span class="text-primary">severe hemophilia</span> - a factor VIII or IX level below 1% of normal blood levels.</li>
                <li><span class="text-primary">hemorrhage</span> - rapid, uncontrollable bleeding.</li>
                <li><span class="text-primary">hemostasis</span> - the process by which the body stops bleeding.</li>
                <li><span class="text-primary">hepatitis</span> - inflammation of the liver. It can be caused by infection from several hepatitis viruses, including hepatitis A, B or C.</li>
                <li><span class="text-primary">hepatitis A</span> - inflammation of the liver caused by the hepatitis A virus. There is a vaccine to prevent it.</li>
                <li><span class="text-primary">hepatitis B</span> - inflammation of the liver caused by the hepatitis B virus. There is a vaccine to prevent it.</li>
                <li><span class="text-primary">hepatitis C</span> - inflammation of the liver caused by the hepatitis C virus. There is no vaccine against it.</li>
                <li><span class="text-primary">hereditary disease</span> - a condition that is genetically passed down to offspring.</li>
                <li><span class="text-primary">HIV (human immunodeficiency virus)</span> - the virus that causes AIDS.</li>
                <li><span class="text-primary">infusion</span> - delivering clotting factor concentrate directly into a vein.</li>
                <li><span class="text-primary">continuous infusion</span> - steadily infusing clotting factor concentrate; often used during surgery.</li>
                <li><span class="text-primary">inheritance</span> - the biological process of transmitting certain characteristics or conditions from parents to offspring.</li>
                <li><span class="text-primary">inhibitor</span> - an antibody to infused clotting factor concentrates, making standard treatments ineffective.</li>
                <li><span class="text-primary">Inhibitor Summit</span> - NHF’s weekend educational conference for patients with inhibitors and their families.</li>
                <li><span class="text-primary">intracranial hemorrhage</span> - a bleed into the brain.</li>
                <li><span class="text-primary">joint fusion</span> - surgery to combine one or more bones in a joint. Most commonly used in joints where replacement surgery is not recommended, such as the ankle.</li>
                <li><span class="text-primary">joint replacement</span> - using artificial components in a joint, such as the knee or elbow, to replace those that are damaged from wear and tear or chronic bleeds.</li>
                <li><span class="text-primary">lifetime cap</span> - a spending limit on insurance benefits. Once it is reached, the policy no longer provides coverage.</li>
                <li><span class="text-primary">menorrhagia</span> - prolonged, heavy bleeding during menstruation. Can be a symptom of a bleeding disorder, such as VWD.</li>
                <li><span class="text-primary">mutation</span> - a change in the DNA of a cell, due to such causes as exposure to radiation or viruses, or during cell division. Hemophilia is caused by cell mutation.</li>
                <li><span class="text-primary">spontaneous mutation</span> - a genetic change that occurs without a triggering agent, usually due to a malfunctioning cell enzyme.</li>
                <li><span class="text-primary">parvovirus B19</span> - an infectious virus that can potentially be transmitted through plasma-derived blood products.</li>
                <li><span class="text-primary">pegylated interferon</span> - a drug made from human proteins, called interferons, used to treat chronic hepatitis C. Usually paired with ribavirin.</li>
                <li><span class="text-primary">plasma</span> - yellow-colored, protein-rich portion of the blood, which carries the red blood cells, white blood cells and platelets.</li>
                <li><span class="text-primary">platelets</span> - tiny platelike components of blood that help seal injured blood vessels and stop bleeding.</li>
                <li><span class="text-primary">port</span> - a device that delivers intravenous drugs. It is usually implanted under the skin in the chest.</li>
                <li><span class="text-primary">pre-existing condition</span> - a health condition that existed prior to obtaining health insurance.</li>
                <li><span class="text-primary">prophylaxis</span> - a treatment regimen to prevent bleeds.</li>
                <li><span class="text-primary">primary prophylaxis</span> - regularly scheduled factor product treatments to prevent bleeding episodes. Usually begun in childhood and performed two to three times weekly.</li>
                <li><span class="text-primary">secondary prophylaxis</span> - regularly scheduled factor product treatments begun after a pattern of bleeding occurs or to treat a target joint.</li>
                <li><span class="text-primary">recombinant product</span> - genetically engineered factor product made without human blood products, decreasing the risk of transmission of bloodborne infections.</li>
                <li><span class="text-primary">ribavirin</span> - an antiviral drug used with peg-interferon to treat chronic hepatitis C infection. It can have serious, severe side effects.</li>
                <li><span class="text-primary">Standards of Care</span> - state legislation to protect patient access to HTCs and the full range of products and services.</li>
                <li><span class="text-primary">Steps for Living</span> - NHF’s online life stages educational curriculum for patients from birth through 25 years old.</li>
                <li><span class="text-primary">sustained viral response</span> - indicator that hepatitis C virus has been cleared from the bloodstream.</li>
                <li><span class="text-primary">synovitis</span> - inflammation of the synovial membrane, which surrounds joints. Can be caused by repeat bleeding into the same joint.</li>
                <li><span class="text-primary">target joint</span> - a joint that has had repeated bleeds, or at least four bleeds within a six-month period.</li>
                <li><span class="text-primary">thrombophilia</span> - several distinct conditions in which there is an increased tendency toward excessive clotting.</li>
                <li><span class="text-primary">thrombosis</span> - the formation of a blood clot.</li>
                <li><span class="text-primary">titer</span> - a measure of the concentration of antibodies, called inhibitors, in the blood.</li>
                <li><span class="text-primary">von Willebrand disease (VWD)</span> - a bleeding disorder in which von Willebrand factor (VWF), a blood protein, is either deficient or defective.</li>
                <li><span class="text-primary">von Willebrand factor (VWF)</span> - a blood protein that helps platelets plug injured blood vessel walls by causing them to stick together. It is also a carrier for factor VIII.</li>
              </ul>
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

    <script src="css/offcanvas.js"></script>
    <?php include 'footer.php'; ?>
  </body>
</html>
