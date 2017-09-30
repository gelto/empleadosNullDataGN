function registra(nombre, email, fecha){
	var token = $('.csrf').val();
	var variables = {};
    variables["nombre"] = nombre.val();
    variables["email"] = email.val();
    variables["fecha"] = fecha.val();

	variables["alias"] = {};
	variables["domicilio"] = {};
	variables["lat"] = {};
	variables["lon"] = {};

	$('.alias:not(":hidden")').each(function( index, value ) {
		variables["alias"][index] = $(this).val();
	});

	$('.domicilio:not(":hidden")').each(function( index, value ) {
		variables["domicilio"][index] = $(this).val();
	});

	$('.lat:not(":hidden")').each(function( index, value ) {
		variables["lat"][index] = $(this).val();
	});

	$('.lon:not(":hidden")').each(function( index, value ) {
		variables["lon"][index] = $(this).val();
	});

	$.post('/altaempleadopost', {
      vars: variables,
      _token: token
    }, function(responseData, textStatus, jqXHR) {
      if (responseData.status == "ok") {
        location.href = "/";
      }else{
      	var clase = "." + responseData.clase;
      	$(clase).addClass('invalido');
      }
    }, 'json');
}