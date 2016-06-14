function callTable(genre, page) {

	$.ajax({
	  url: page,
	  type: "GET",
	  data: { 'term': genre}


	}).done(function (response){
		$('.table').html(response);
	});
}



$( "body" ).on( "click", "#search-btn", function(e) {
	e.preventDefault();
	var url = '/list?page=' + $('.active span').text();
	callTable($('#genre1').val(), url);
});
$( "body" ).on( "click", "a", function(e) {
	e.preventDefault();
	callTable($('#genre1').val(), $(this).attr('href'));
});

$(document).ready(function() {
	var url = '/list?page=1';
	callTable($('#genre1').val(), url);
});

