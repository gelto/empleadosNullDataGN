$(document).ready(function() {
	$('.clone').hide();
	$('body').on('click', '.agregar', function(){
		if(domiciliosVacios()){
			var otro = $( ".clone" ).clone();
			otro.removeClass('clone').show();

			otro.appendTo( ".domicilios" );	
		}
	});
});