
$( "body" ).on( "click", "#search-btn", function() {
$.ajax({
  url: "/",
  type: "GET",
  data: {genre:$('#genre1').val(),table_only:true }

}).done(function (response){
	$('table').html(response);
})

});