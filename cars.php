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
	      	<table class="table table-striped table-bordered">
			  <thead>
			    <tr>
			      <th>Model</th>
			      <th>Manufacturer</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php all_cars(); ?>
			  </tbody>
			</table>
	      </div>
      
      </div><!--/.row-fluid-->
      
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