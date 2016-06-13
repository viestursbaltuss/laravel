function callTable(genre, page) {

	$.ajax({
	  url: "/list",
	  type: "GET",
	  data: { 'genre': genre, 'page': page }

	}).done(function (response){
		$('.table').html(response);
	});
}
$( "body" ).on( "click", "#search-btn", function(e) {
	e.preventDefault();
	callTable($('#genre1').val(), $('.active span').text());
});
$( "body" ).on( "click", "a", function(e) {
	e.preventDefault();
	callTable($('#genre1').val(), $(this).text());
});

$(document).ready(function() {
	callTable($('#genre1').val(), 1);
});