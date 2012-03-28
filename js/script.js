/* Basic functionality for JS instant searching and other magic.
 * Author: Joey Cody
 */

$(function() {
  $(".search_button").click(function() {
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
              	console.log("SUCCESS");
                  $("#results").html('');
                  $("#searchresults").show();
                  $(".word").html(searchString);
             },
             success: function(html){ // this happens after we get results
             	console.log('html');
                  $("#results").show();
                  $("#results").append(html);
            }
          });
      }
      return false;
  });
});





