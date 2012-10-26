
function loadImages(){
	$.each(imgarray, function(i, value){
		$('#slider').append('<li class="image"><img src="images/sb/thumbs/'+value+'" /></li>');
	});
}
