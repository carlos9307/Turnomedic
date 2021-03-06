<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script type="text/javascript" src="../assets/js/date.js" ></script>
	
	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<!-- text fonts -->
	<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
	<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	<style type="text/css">
	/*-----------------------------------------CSS del Calendario--------------------------------*/
		* {
			margin: auto;
		}

		h1 { text-align: center;
			padding: 0.5em; }

		.calendario {
			border: 1px solid gray;
			max-width: 536px;
			background-color: #fffafa;
			text-align: center;
		}

		.diasc {
			border: 1px solid black;
			border-collapse: separate;
			border-spacing: 4px;
		}

		.diasc th, .diasc td {
			font: normal 14pt Century Gothic;
			width: 70px; height: 30px;
		}

		.diasc th {
			color: #990099;
			background-color: #5ecdec;
		}

		.diasc td {
			color: #492736;
			background-color: #9bf5ff;
		}

		.fechaactual {
			font: bold 12pt Century Gothic;
			padding: 0.4em;
		}

		.fechaactual i {
			cursor: pointer;
		}
		.fechaactual i:hover {
			color: blue;
			text-decoration: underline;
		}

		.buscafecha {
			background-color: #663366;
			color: #9bf5ff;
			padding: 5px;
		}

		.buscafecha select, .buscafecha input {
			background-color: #9bf5ff;
			color: #990099;
			font: bold 10pt Century Gothic;
		}

		.buscafecha [type=text] {
			text-align: center;
		}

		.buscafecha [type=button] {
			cursor: pointer;
		}

		.anterior {
			float: left;
			width: 100px;
			font: bold 12pt Century Gothic;
			padding: 0.5em 0.1em;
			cursor: pointer;
		}

		.posterior {
			float: right;
			width: 100px;
			font: bold 12pt Century Gothic;
			padding: 0.5em 0.1em;
			cursor: pointer;
		}

		.anterior:hover {
			color: #34c1aa; text-decorations: underline;
		}

		.posterior:hover {
			color: #34c1aa;
			text-decoration: underline;
		}

		.titulos {
			font: normal 20px "Century Gothic";
			padding: 0.2em;
		}
	</style>
</head>
<body>
<?php include('personas-funciones.php');
if ($_SESSION['perfil'] == "Administrador") { ?>
<script>
//--------------------------------Javascript del Calendario-----------------------------------------------------
//variables
diasSemana=["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];

diasMini = ["lun", "mar", "mie", "jue", "vie", "sab", "dom"];

//funcion que devuelve el nombre de un mes de acuerdo al numero que le mandes del 0 al 11
	function nombre_mes(numeroMes) {
		var arrayMes = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
		return arrayMes[numeroMes]; 	//Devuelvo el mes de acuerdo al numero que me manden
	}

window.onload = function() {

	hoy = new Date();
	diaSemHoy = hoy.getDay();
	diaHoy = hoy.getDate();
	mesHoy = hoy.getMonth();
	anioHoy = hoy.getFullYear();

	tit = document.getElementById("titulos");
	ant = document.getElementById("anterior");
	pos = document.getElementById("posterior");

	f0 = document.getElementById("fila0");
	pie = document.getElementById("fechaactual");

	pie.innerHTML = diasSemana[diaSemHoy] + ", " + diaHoy + " de " + nombre_mes(mesHoy) + " de " + anioHoy;

	mesCal = mesHoy;
	anioCal = anioHoy;

	cabecera();
	primeraLinea();
	escribirDias();
}
	
	function cabecera() {
		tit.innerHTML = nombre_mes(mesCal) + " de " + anioCal;
		mesant = mesCal - 1;
		mespos = mesCal + 1;
		if (mesant < 0) {mesant = 1;}
		if (mespos > 11) {mespos = 0;}
		ant.innerHTML = nombre_mes(mesant);
		pos.innerHTML = nombre_mes(mespos);
	}

	function primeraLinea() {
		for (var i= 0; i < 7; i++) {
			celda0 = f0.getElementsByTagName("th")[i];
			celda0.innerHTML = diasSemana[i];
		}
	}

	function escribirDias() {
		primeromes = new Date(anioCal, mesCal, "1");
		prsem = primeromes.getDay();
		//prsem--; Esto es solo si el dia empieza con lunes

		if (prsem == -1) {prsem = 6;}

		diaprmes = primeromes.getDate();
		prcelda = diaprmes - prsem;
		empezar = primeromes.setDate(prcelda);
		diaMes = new Date();
		diaMes.setTime(empezar);

		for (i = 1; i < 7; i++) {
			fila = document.getElementById("fila" + i);
			for (j = 0; j < 7; j++) {
			
				miDia = diaMes.getDate();
				miMes = diaMes.getMonth();
				miAnio = diaMes.getFullYear();
				celda = fila.getElementsByTagName("td")[j];

				//Con esto le paso parametros al link al metodo post y se pone el numerito en el dia
				celda.innerHTML = "<a href=agenda-dia.php?dia="+miDia+"&mes="+miMes+"&year="+miAnio+">"+miDia+"</a>"; 

				celda.style.backgroundColor = "#9bf5ff";
				celda.style.color = "#492736";

				if (j == 6) {
					celda.style.color = "#f11445";
				}

				if (miMes != mesCal) {
					celda.style.color="#a0babc";
				}

				if (miMes == mesHoy && miDia == diaHoy && miAnio == anioHoy) {
					celda.style.backgroundColor = "#d7d8cd";
					celda.innerHTML = "<cite title='Fecha Actual'><a href=agenda-dia.php?dia="+miDia+"&mes="+miMes+"&year="+miAnio+">"+miDia+"</a></cite>";
				}

				miDia = miDia + 1;
				diaMes.setDate(miDia);
			}
		}
	}

	function mesantes() {
		mesNuevo = new Date();
		primeromes--;
		mesNuevo.setTime(primeromes);
		mesCal = mesNuevo.getMonth();
		anioCal = mesNuevo.getFullYear();

		cabecera();	//LLamada a funcion de cambio de cabecera
		escribirDias(); //Llamada de funcion de cambio de tabla

	}

	function mesdespues() {
		mesNuevo = new Date();
		tiempoUnix = primeromes.getTime();
		tiempoUnix = tiempoUnix + (45*24*60*60*1000);
		mesNuevo.setTime(tiempoUnix);
		mesCal = mesNuevo.getMonth();
		anioCal = mesNuevo.getFullYear();
		cabecera();
		escribirDias(); 
	}

	function actualizar() {
		mesCal = hoy.getMonth();
		anioCal = hoy.getFullYear();
		cabecera();
		escribirDias();
	}

	function mifecha() {
		miAnio = document.buscar.buscaranio.value;
		listameses=document.buscar.buscames;
		opciones=listameses.options;
		num=listameses.selectedIndex;
		miMes=opciones[num].value;

		if(isNaN(miAnio) || miAnio<1) {
			alert("El año esta en formato erroneo, ingrese un año de cuatro dígitos mayor a 0");
		} else {
			miFe = new Date();
			miFe.setMonth(miMes);
			miFe.setFullYear(miAnio);
			mesCal = miFe.getMonth();
			anioCal = miFe.getFullYear();
			cabecera();
			escribirDias();
		}
	}

</script>
<!-- ................................................Estructura HTML..............................-->

<form>
	<input type="button" value="Ver Mes" / onclick="location='calendario.php';" />
	<input type="button" value="Ver Semana" onclick="location='agenda-semana.php';" />
	<input type="button" value="Ver Dia" onclick="location='agenda-dia.php';"/>
</form>
<div class="calendario">
	<div class="anterior" id="anterior" onclick="mesantes()"></div>
	<div class="posterior" id="posterior" onclick="mesdespues()"></div>
	<h2 class="titulos" id="titulos"></h2>

	<table class="table  table-bordered table-hover">
		<tr id="fila0">
			<th></th><th></th><th></th><th></th><th></th><th></th><th></th>
		</tr>
		<tr id="fila1">
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td>
		</tr>
		<tr id="fila2">
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td>
		</tr>
		<tr id="fila3">
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td>
		</tr>
		<tr id="fila4">
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td>
		</tr>
		<tr id="fila5">
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td>
		</tr>
		<tr id="fila6">
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td>
		</tr>
	</table>
	
	<div class="fechaactual" id="fechaactual">
		<i onclick="actualizar()">Hoy: </i>
	</div>

	<!--<div class="buscafecha">
		<form action="#" name="buscar">
			<p>Mes&nbsp;&nbsp;&nbsp;
			<select name="buscames">
				<option value="0">Enero</option>
				<option value="1">Febrero</option>
				<option value="2">Marzo</option>
				<option value="3">Abril</option>
				<option value="4">Mayo</option>
				<option value="5">Junio</option>
				<option value="6">Julio</option>
				<option value="7">Agosto</option>
				<option value="8">Septiembre</option>
				<option value="9">Octubre</option>
				<option value="10">Noviembre</option>
				<option value="11">Diciembre</option>
			</select>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Año&nbsp;&nbsp;&nbsp;
			<input type="text" name="buscaranio" maxlength="4" size="4" />
		&nbsp;&nbsp;
			<input type="button" class="btn btn-primary" value="Buscar" onclick="mifecha()" />
</div>-->
<?php } else { 
	echo "<div style='font-size: 24px; text-align: center; color: #F30808'>Acceso Restringido</div>";
} ?>
</body>
</html>
