function registra(nombre, email, fecha, lat, lon){
	var token = $('.csrf').val();
	var variables = {};
    variables["nombre"] = nombre.val();
    variables["email"] = email.val();
    variables["fecha"] = fecha.val();

	if(lat!="" && lon!=""){
		variables["lat"] = lat.val();
		variables["lon"] = lon.val();
	}else{
		variables["lat"] = 0
		variables["lon"] = 0;
	}

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