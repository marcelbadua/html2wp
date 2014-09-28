<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>HTML TO Wordpress</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.css">

  <link rel="stylesheet" href="css/theme.css">

  <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
</head>

<body>
  <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">HTML to WP File Parser</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

 
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li> -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


  <div class="container">
    <div class="row">

          <div class="col-sm-4">
        <div  id="result">
          <p>Paste your html codes at the textarea</p>
          <p>Separate parts of yours html with 
          
          <ul>
          <li><code>'{{header}}'</code></li> 
          <li><code>'{{index}}'</code></li> 
          <li><code>'{{footer}}'</code></li>
          </ul>
           on areas needed.</p>
          <p>Structure your folders to</p>
          <ul> 
          <li>'css/' for Stylesheets, </li>
          <li>'js/' for JS Files and </li>
          <li>'img/' for Image Assets</li>
          </ul>
          <p>Links will be automatically added with <br> <code>< ? php echo get_template_directory_uri(); ?>/</code></p>

          <p>Click on the process button to proceed, after that a good ol' download button will appear.</p>
        </div>
      </div>


      <div class="col-sm-8">
      
        <form name="createForm" id="createForm" action="create.php" method="POST"> 
          <textarea id="input-codes" class="form-control" rows="20" name="inputCode" required></textarea>
          <input type="hidden" name="inputSession" value="<?php echo rand(10000,50000); ?>">
          <br>
          <button id="submit-button" type="submit" class="btn btn-info">Process</button>
        </form>
        
      </div>

    </div>
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script>
  window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')
  </script>

  <script src="js/vendor/bootstrap.min.js"></script>

  <script src="js/theme.js"></script>


  <!-- MARCEL BADUA -->

</body>
</html>