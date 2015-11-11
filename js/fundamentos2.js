$(document).ready(iniciador);

function iniciador()
{
   reloj();
   setInterval(reloj,1000);
   fecha();
}

function reloj()
{
	var fechaReloj= new Date(); //Clase controla el tiempo, fechas.
	var hrReloj= fechaReloj.getHours(); //Con esta función obtengo la hoja "23" "4"
	var minReloj =fechaReloj.getMinutes(); // Se obtienen los minutos
	var segReloj=fechaReloj.getSeconds(); // Se obtienen los segundos
	var estado = new String();
	//var muestroHora = document.getElementById("reloj");
	

	//Estado AM O PM
	if(hrReloj>=0 && hrReloj<=11)
	{
		estado="a.m.";
	}
	else if(hrReloj>=12 && hrReloj<=23)
	{
		estado="p.m.";
		
	}

	if(hrReloj<=9)
	{
		hrReloj = "0" + hrReloj;
	}

	if(minReloj<=9)
	{
		minReloj = "0" + minReloj;
	}

	if(segReloj<=9)
	{
		segReloj = "0" + segReloj;
	}
	//RELOJ 12 HRS
	if(hrReloj > 12)
	{
		hrReloj = hrReloj - 12;
	}

	//muestroHora.innerHTML = "<h2>"+hrReloj+":"+minReloj+":"+segReloj+" "+estado+"</h2>";
	$("#reloj").html("<h2>"+hrReloj+":"+minReloj+":"+segReloj+" "+estado+"</h2>");
}



function fecha()
{

		var calendario= new Date();
		var dia =calendario.getDate(); //Se obtene el día de 0 a 6 lun,mar,mier..
		var mes=calendario.getMonth(); //Se obtiene el mes comienza desde 0...
		var anio=calendario.getFullYear(); //Anio
		var muestroFecha =document.getElementById("fecha");
		
		mes=mes+1;

		
	 $("#fecha").append("<h2>"+dia+"/"+mes+"/"+anio+"</h2>");
	 
}

	//muestroHora.innerHTML = "<h1>"+hrReloj+":"+minReloj+":"+segReloj+" "+estado+"</h1>";

