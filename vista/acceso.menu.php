 <!-- incluye la cabecera de la página, el menú lateral  y el fondo del cuerpo de la página -->
<?php

	if(empty($_SESSION)) {
		header('location: /');
	}

	require_once "includes/head.php";
	require_once "includes/menu_lateral.php";
 	include ('includes/cuerpo.php');

 	$usuario = $_SESSION["usuario"] ;

?>
<!--  -->
<!-- "strtoupper" sirve para poner en PHP todas las letras en mayúsculas -->
<h1>BIENVENIDO <?php echo strtoupper($usuario->getnombre()); ?></h1>
<h2>
	<!-- fecha en php -->
	<?php
		setlocale(LC_ALL, 'es_ES');
		echo "Hoy es ", utf8_encode(ucfirst(strftime("%A %d de %B de %Y")));
	?>
	<!---->
	<!--reloj en javascript -->
	<div id="clockdate">
		<div class="clockdate-wrapper">
			<div id="clock"></div>
		</div>
	</div>
	<!---->
	<!-- Semana en javascript -->
	<script type="text/javascript">
		function getWeekNumber(d) {
			d = new Date(+d);
			d.setHours(0,0,0,0);
			d.setDate(d.getDate() + 4 - (d.getDay()||7));
			var yearStart = new Date(d.getFullYear(),0,1);
			var weekNo = Math.ceil(( ( (d - yearStart) / 86400000) + 1)/7);
			return [d.getFullYear(), weekNo];
		}
		var result = getWeekNumber(new Date());
		document.write('Estamos en la semana ' + result[1] + ' de ' + result[0]);
	</script>
	<!---->
</h2>
<!-- incluye el pie de página -->
<?php
	include ('includes/footer.php');
?>
<!-- -->