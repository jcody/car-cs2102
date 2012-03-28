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
    
    <!-- Le magic JS search -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
    $(function() {
	  $("#search_button").click(function() {
	      // getting the value that user typed
	      var searchString = $("#search_box").val();
	
	      // forming the queryString
	      var data = 'search='+ searchString;
	      
	      // if searchString is not empty
	      if(searchString) {
	          // ajax call
	          $.ajax({
	              type: "POST",
	              url: "search.php",
	              data: data,
	              beforeSend: function(html) { // this happens before actual call
	              	console.log("SUCCESS 1");
	                  $("#results").html('');
	                  $("#searchresults").show();
	                  $(".word").html(searchString);
	             },
	             success: function(html){ // this happens after we get results
		             console.log("close...");
		             console.log(html);
	                  $("#results").show();
	                  $("#results").append(html);
	            }
	          });
	      }
	      return false;
	  });
	});
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
            
	      	<?php all_cars(); ?>
			
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