$(document).ready(function(){
	$('#btn-toggles').on('click', function () {
	    $('#sidebar, #content').toggleClass('active');
	    $('.collapse.in').toggleClass('in');
	    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
	});

	// ajax show project name
	$('#Project_name_select').on('change', function () {
		var name = $(this).find('option:selected').attr('nameattr');
		$('#Project_name_show').text(name);
	})
})



 
$(".lead-pop").popover({
	html: true, 
	content: function() {
    	return $('#button-pop').html();
	}
}).click(function(e){
	e.preventDefault();
});

$(".title-pop").popover({
	html: true, 
	content: function() {
    	return $('#list-pop').html();
	}
}).click(function(e){
	e.preventDefault();
});

