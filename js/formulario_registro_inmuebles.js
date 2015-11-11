//DEFINICION DE OBJETOS Y VARIABLES

var tipo_inmueble=document.querySelector("#tipo_inmueble");
var numero_banios=document.querySelector("#numero_banios");
var comuna=document.querySelector("#comuna");
var antiguedad=document.querySelector("#antiguedad");
var estrato=document.querySelector("#estrato");
var valor_arriendo=document.querySelector("#valor_arriendo");
var area=document.querySelector("#area");
var tiempo_minimo=document.querySelector("#tiempo_minimo");
var numero_pisos=document.querySelector("#numero_pisos");
var numero_hab=document.querySelector("#numero_hab");
var descripcion=document.querySelector("#descripcion");
var imagen=document.querySelector("#imagen");

var ER_numeros=/^\d+$/;


//DECLARACONES DE FUNCIONES
function validarInmuebles(evento)
{
		var CajaX=evento.target,
			validado= true,
			color;

			if(CajaX.id=="tipo_inmueble" || CajaX.id=="numero_banios" || CajaX.id=="comuna" || CajaX.id=="antiguedad" || CajaX.id=="estrato"  || CajaX.id=="area" || CajaX.id=="tiempo_minimo" || CajaX.id=="numero_hab" || CajaX.id=="numero_pisos" || CajaX.id=="descripcion")
			{
				if(CajaX.value=="0")
				{
					alert("Selecciona una opción")
					validado=false;
					CajaX.focus();
				}					
			}else if(CajaX.id=="valor_arriendo")
			{
				if(!ER_numeros.exec(CajaX.value))
				{	alert("Este campo sólo acepta números");
					validado=false;
					CajaX.focus();
				}
			}



			color=(validado)?"springgreen":"salmon";
			CajaX.style.outline="thin solid "+color;

}


function cargaDocumento(){

tipo_inmueble.addEventListener("blur",validarInmuebles);
numero_banios.addEventListener("blur",validarInmuebles);
comuna.addEventListener("blur",validarInmuebles);
antiguedad.addEventListener("blur",validarInmuebles);
estrato.addEventListener("blur",validarInmuebles);
valor_arriendo.addEventListener("blur",validarInmuebles);
area.addEventListener("blur",validarInmuebles);
tiempo_minimo.addEventListener("blur",validarInmuebles);
numero_pisos.addEventListener("blur",validarInmuebles);
numero_hab.addEventListener("blur",validarInmuebles);
descripcion.addEventListener("blur",validarInmuebles);

}
//ASIGNACION DE EVENTOS

window.addEventListener("load",cargaDocumento);

// a todos les pongo un boolean y si todos no esta así no se envia el formulario