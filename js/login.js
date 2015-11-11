//DEFINICION DE OBJETOS Y VARIABLES
var usuario=document.querySelector("#usuario");
var contrasenia= document.querySelector("#contrasenia");
var btn=document.querySelector("btn");

//DECLARACONES DE FUNCIONES

function validar(evento)
{
	var CajaX=evento.target

	if(CajaX.id=="usuario" ||  CajaX.id=="contrasenia")
	{
		{if(CajaX.value=="")
			alert("Llenar los campos");
		}
	}

}


function cargaDocumento()
{
 btn.addEventListener("click",validar);
}


//ASIGNACION DE EVENTOS
window.addEventListener("load",cargaDocumento);

