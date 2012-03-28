<!DOCTYPE html>
<html>
  <head>
    <title>Car Catalogue - CS2102 Database App</title>

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
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
            <h1>Get A Car.</h1>
			<br />
			<tr>
				<td>hi</td>
				<td>goodbye</td>
				<td>testing</td>
			</tr>
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
              <h2>Browse.</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Rent.</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Fix.</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
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