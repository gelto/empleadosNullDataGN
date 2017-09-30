var ubicacionMask = /([0-9\-]){0,100}/g;
var fechaMask = /([0-9]){2,2}\/([0-9]){2,2}\/([0-9]){4,4}/g;
var letrasMask = /^[\/\"\'\?\¿\!\¡\-\,\.0-9a-zA-Z´áéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/;
var correoMask = /([a-zA-z0-9\-\_\u00D1\u00F1\u00C1\u00E1\u00C9\u00E9\u00CD\u00ED\u00D3\u00F3\u00DA\u00FA\u00DC\u00FC.]){1,200}@([a-zA-z0-9\-\_\u00D1\u00F1\u00C1\u00E1\u00C9\u00E9\u00CD\u00ED\u00D3\u00F3\u00DA\u00FA\u00DC\u00FC.]){1,200}\.([a-zA-z0-9\-\_\u00D1\u00F1\u00C1\u00E1\u00C9\u00E9\u00CD\u00ED\u00D3\u00F3\u00DA\u00FA\u00DC\u00FC.]){1,200}$/;

$(document).ready(function() {
	// limpa el mensaje de error por default
	$('.error').hide();

	$('.enviar').click(function(event){
		event.preventDefault();

		var nombreObj = $('.nombre');
		var emailObj = $('.email');
		var fechaObj = $('.fecha');

		if(nombreObj.val()=="" || !nombreObj.val().match(letrasMask)){
			nombreObj.addClass("invalido");
		}

		if(emailObj.val()=="" || !emailObj.val().match(correoMask)){
			emailObj.addClass("invalido");
		}

		if(fechaObj.val()=="" || !fechaObj.val().match(fechaMask)){
			fechaObj.addClass("invalido");
		}


		$('.lat:not(":hidden")').each(function( index, value ) {
			if($(this).val()==""){
				$(this).addClass('invalido');
			}
		});

		$('.lon:not(":hidden")').each(function( index, value ) {
			if($(this).val()==""){
				$(this).addClass('invalido');
			}
		});

		$('.alias:not(":hidden")').each(function( index, value ) {
			if($(this).val()==""){
				$(this).addClass('invalido');
			}
		});

		$('.domicilio:not(":hidden")').each(function( index, value ) {
			if($(this).val()==""){
				$(this).addClass('invalido');
			}
		});

		var invalidos = $('.invalido').length;
		
		if(invalidos == 0){
			registra(nombreObj,emailObj,fechaObj);
		}

	});

	$('body').on('input propertychange', 'input',function(){
		if($(this).hasClass("invalido")){
			$(this).removeClass("invalido");
		}
	});

});

function domiciliosVacios(){
	var sinError = true;

	$('.alias:not(":hidden")').each(function( index, value ) {
		if($(this).val()==""){
			$(this).addClass('invalido');
			sinError = false;
		}
	});

	$('.domicilio:not(":hidden")').each(function( index, value ) {
		if($(this).val()==""){
			$(this).addClass('invalido');
			sinError = false;
		}
	});

	return sinError;
}


