//DEFINICION DE OBJETOS Y VARIABLES
	var formulario=document.querySelector("#rfc");
	var primer_nombre = document.querySelector("#primer_nombre");
	var segundo_nombre= document.querySelector("#segundo_nombre");
	var primer_apellido= document.querySelector("#primer_apellido");
	var segundo_apellido= document.querySelector("#segundo_apellido");
	var tipo_documento= document.querySelector("#tipo_documento");
	var numero_documento= document.querySelector("#numero_documento");
	var sexo= document.querySelector("#sexo");
	var correo=document.querySelector("#correo");
	var celular=document.querySelector("#celular");
	//var btnenviar=document.querySelector("#enviar");
	var tel=document.querySelector("#tel");
	var num_cuenta=document.querySelector("#num_cuenta");
	var clave1=document.querySelector("#clave1");
	var clave2=document.querySelector("#clave2");
	var usuario=document.querySelector("#usuario");
	var limpiar=document.querySelector("#limpiar");
	var tarjeta=document.querySelector("#tarjeta");
	var sexo=document.querySelector("#sexo");
	var tipo_documento=document.querySelector("#tipo_documento");

	var ER_nombre=/^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$/;
	var ER_correo= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	var ER_numeros=/^\d+$/;



//DECLARACONES DE FUNCIONES
function validarDatos(evento)
		{	
			var CajaX=evento.target,//Objeto que desencadenó el evento
			validado= true,
			color;

		if(CajaX.id=="primer_nombre" || CajaX.id=="primer_apellido")
			{
				if(!ER_nombre.exec(CajaX.value))
				{
					//alert("El campo "+CajaX.placeholder+" sólo acepta letras y espacios en blanco");
					alert("Este campo sólo acepta letras");
					validado= false;
					CajaX.focus();
				}
			}else if(CajaX.id=="correo")
			{
				if(!ER_correo.exec(CajaX.value))
				{	alert("Correo Electrónico inválido");
					validado= false;
					CajaX.focus();
				}
			}else if(CajaX.id=="numero_documento" || CajaX.id=="celular"  || CajaX.id=="tel" || CajaX.id=="num_cuenta")
			{
				if(!ER_numeros.exec(CajaX.value))
				{	alert("Este campo sólo acepta números");
					validado=false;
					CajaX.focus();
				}
			}else if(CajaX.id=="tarjeta" || CajaX.id=="sexo" || CajaX.id=="tipo_documento")

				if(CajaX.value=="0")
				{alert("Selecciona una opción");
				validado=false;
				CajaX.focus();
				}


			if(clave1.value!=clave2.value)
			{	alert("Las contraseñas no coinciden");
						validado=false;
			}

			color=(validado)?"springgreen":"salmon";
			CajaX.style.outline="thin solid "+color;
	}


function cargaDocumento(){

	primer_nombre.addEventListener("blur",validarDatos);
	segundo_nombre.addEventListener("blur",validarDatos);
	primer_apellido.addEventListener("blur",validarDatos);
	segundo_apellido.addEventListener("blur",validarDatos);
	correo.addEventListener("blur",validarDatos);
	numero_documento.addEventListener("blur",validarDatos);
	celular.addEventListener("blur",validarDatos);
	tel.addEventListener("blur",validarDatos);
	//btnenviar.onclick=validarDatos;
	num_cuenta.addEventListener("blur",validarDatos);
	//clave1.addEventListener("blur",validarDatos);
	clave2.addEventListener("blur",validarDatos);
	usuario.addEventListener("blur",validarDatos);
	tarjeta.addEventListener("blur",validarDatos);
	sexo.addEventListener("blur",validarDatos);
	tipo_documento.addEventListener("blur",validarDatos);
	

}

//ASIGNACION DE EVENTOS

window.addEventListener("load",cargaDocumento);
