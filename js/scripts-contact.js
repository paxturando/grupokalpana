$(document).ready(function(){
	$("#form-enviar").click(function(){
		var nombreValido = validarNombre();
		var mailValido = validarMail();
		var telefonoValido = validarTelefono();
		var comentarioValido = validarComentario();
		return (nombreValido && mailValido && telefonoValido && comentarioValido);
	});
	$("input").focus(function(){
		$(this).removeClass("campo-error");
		$(this).prev("span").fadeOut();
	});
	$("input").blur(function(){
		if($(this).is("#form-name"))
			validarNombre();
		if($(this).is("#form-mail"))
			validarMail();
		if($(this).is("#form-tel"))
			validarTelefono();
	});
	$("textarea").focus(function(){
		$(this).removeClass("campo-error");
		$(this).prev("span").fadeOut();
	});
	$("textarea").blur(function(){
		if($(this).is("#form-comentario"))
			validarComentario();;
	});
});
function validarNombre()
{
	var valido = true;
	var nombre = $("#form-name").val();

	if (nombre == "")
	{
		valido = false;
		$("#form-name").addClass("campo-error");
		$("#form-name").prev("span").text("nombre requerido");
		$("#form-name").prev("span").fadeIn();
	}
	else
	{
		$("#form-name").removeClass("campo-error");
		$("#form-name").prev("span").fadeOut();
	}

	return valido;
}
function validarMail()
{
	var valido = true;	
	var mail = $("#form-mail").val();
	var expr_mail = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;

	if (mail == "" || !expr_mail.test(mail))
	{
		valido = false;
		$("#form-mail").addClass("campo-error");

		if (mail == "")
			$("#form-mail").prev("span").text("mail requerido");
		else if (!expr_mail.test(mail))
			$("#form-mail").prev("span").text("mail invalido");
		$("#form-mail").prev("span").fadeIn();
	}
	else
	{
		$("#form-mail").removeClass("campo-error");
		$("#form-mail").prev("span").fadeOut();
	}

	return valido;
}
function validarTelefono()
{	
	var valido = true;
	var telefono = $("#form-tel").val();

	if (telefono == "")
	{
		valido = false;
		$("#form-tel").addClass("campo-error");
		$("#form-tel").prev("span").text("teléfono requerido");
		$("#form-tel").prev("span").fadeIn();
	}
	else
	{
		$("#form-tel").removeClass("campo-error");
		$("#form-tel").prev("span").fadeOut();
	}	

	return valido;
}
function validarComentario()
{
	var valido = true;
	var comentario = $("#form-comentario").val();

	if (comentario == "")
	{
		valido = false;
		$("#form-comentario").addClass("campo-error");
		$("#form-comentario").prev("span").text("comentario requerido");
		$("#form-comentario").prev("span").fadeIn();
	}
	else
	{
		$("#form-comentario").removeClass("campo-error");
		$("#form-comentario").prev("span").fadeOut();
	}

	return valido;
}