<!DOCTYPE html>
<html>
  <head>
    <title>Car Catalogue - CS2102 Database App</title>

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Enriqueta:700' rel='stylesheet' type='text/css'>
    
    <!-- Le php scripts -->
    <?php require_once('functions.php'); ?>
    
    <!-- Le magic JS search -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">

	</script>
    
  </head>
  <body>

	<?php include('includes/header.php'); ?>

    <div class="container-fluid">
      <div class="row-fluid">
	      <?php include('includes/sidebar.php'); ?>
	      <div class="span9">
	      <form class="well form-inline" action="search.php" method="post">
	            <input type="text" name="search_query" placeholder="Search" id="search_box" class="search">
	            <input id="search_button" class="btn btn-primary" type="submit" value="Search">
	            <a class="btn btn-small" href="#"><i class="icon-cog"></i> Advanced</a>
          </form>
          
          <div id="searchresults">Search results for <span class="word"></span></div>
            
	      	<table class="table table-striped table-bordered">
			  <thead>
			    <tr>
			      <th>Model</th>
			      <th>Manufacturer</th>
			      <th>Engine</th>
			      <th>Type</th>
			    </tr>
			  </thead>
			  <tbody id="results" class="update">
			    <?php all_cars(); ?>
			  </tbody>
			</table>
			
	      </div><!--/.span9 -->
      </div><!--/.row-fluid-->
      
     <?php include('includes/footer.php'); ?> 
    </div><!--/.fluid-container-->
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-button.js"></script>
    
  </body>
</html>