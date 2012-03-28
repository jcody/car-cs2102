<!DOCTYPE html>
<html>
  <head>
    <title>Car Catalogue - CS2102 Database App</title>

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Le php scripts -->
    <?php require_once('functions.php'); ?>
    
  </head>
  <body>

	<?php include('includes/header.php'); ?>

    <div class="container-fluid">
      <div class="row-fluid">
      
        <?php include('includes/sidebar.php'); ?>
        
        
        <div class="span9">
          <div class="hero-unit">
            <h1 class="main-call">Get A Car.</h1>
			<br />
            <form class="form-inline" action="functions.php" method="post">
	            <input type="text" name="search_query" placeholder="Search" class="search">
	            <input class="btn btn-primary" type="submit" value="Search">
	            <a class="btn btn-small" href="#"><i class="icon-cog"></i> Advanced</a>
            </form>
            <br>
            <p>Whether you are browsing, renting or fixing you next car, we have all the data you can possibly need to make the best choice. Search our wide variety of cars and narrow your search by price, type, color and more.</p>
            
          </div>
          <div class="row-fluid">
            <div class="span4">
              <h2 class="sub-call">Browse.</h2>
              <ul class="thumbnails">
				  <li class="span3">
				    <div class="thumbnail">
				      <img src="http://placehold.it/260x180" alt=""><br>
				      <p><a class="btn" href="#">View Cars &raquo;</a></p>
				    </div>
				  </li>
				</ul>
              
            </div><!--/span-->
            <div class="span4">
              <h2 class="sub-call">Rent.</h2>
              <ul class="thumbnails">
				  <li class="span3">
				    <div class="thumbnail">
				      <img src="http://placehold.it/260x180" alt=""><br>
				      <p><a class="btn" href="#">Rent A Car &raquo;</a></p>
				    </div>
				  </li>
				</ul>
            </div><!--/span-->
            <div class="span4">
              <h2 class="sub-call">Fix.</h2>
              <ul class="thumbnails">
				  <li class="span3">
				    <div class="thumbnail">
				      <img src="http://placehold.it/260x180" alt=""><br>
				      <p><a class="btn" href="#">Mechanics &raquo;</a></p>
				    </div>
				  </li>
				</ul>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <?php include('includes/footer.php'); ?> 

    </div><!--/.fluid-container-->
    
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