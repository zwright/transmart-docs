<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Thank you for downloading tranSMART 1.1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
           
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index">tranSMART Version 1.1</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="index">Introduction</a></li>            
              <li class="active"><a href="agreement">Get tranSMART</a></li>              
              <li><a href="http://www.transmartfoundation.org/site/how-get-involved">Community</a></li>
              <li><a href="https://wiki.transmartfoundation.org/display/TSMTGPL/Documentation">Documentation</a></li>              
              <li><a href="https://jira.transmartfoundation.org">Report a bug</a></li>                          
              <li><a href="http://www.transmartfoundation.org">Foundation</a></li>              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="span6">          
<h2>Thank you for choosing tranSMART 1.1</h2>        
          <p>While you're downloading tranSMART, please fill out the information form to provide your name, organisation, and email address. The information you provide will enable us to build a profile of evaluators and users of the tranSMART system that will aid future development of the software.</p> <p><b>We will never share your information with third-parties.</b></p>
       </div>
       <div class="span6">
<?php
   if (!empty($_POST) && !empty($_POST['name']))
   {
      if($fp = fopen('tmpcontact.txt', 'a'))
      {
         fprintf($fp, $_POST['name'] . ":" . $_POST['org']  . ":" . $_POST['email'] . "\r\n");
         fclose($fp);
      }
      // We do not check whether the operation went wrong and do not inform the user.
 ?>

<center><p style="color:#22BB66; font-size:18px;"><br><br><br><br><br><br><b>Your details have been recorded ;)</b></p></center>

<?php
   }
   else
   {
 ?>
          <form name="addcontact" class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Your details</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="name">Your name:</label>
  <div class="controls">
    <input id="name" name="name" placeholder="" class="input-xlarge" type="text">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="org">Your organisation:</label>
  <div class="controls">
    <input id="org" name="org" placeholder="" class="input-xlarge" type="text">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="email">Your email address:</label>
  <div class="controls">
    <input id="email" name="email" placeholder="" class="input-xlarge" required="" type="text">
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="submit"></label>
  <div class="controls">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
<?php } ?>      
       </div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2013 tranSMART Foundation. All rights reserved.</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
  </body>
</html>
