<?php
	
	session_start();


	$_SESSION['usuario'] = $usuario;

	header("Location: ../vista/usuario.search.php");

	if(isset($_SESSION['usuario'])){
		header("Location: vista/usuario.search.php");		
	} else {
		
		$usuario=$_POST['login'];
		$password=$_POST['password'];
		$controlador = new controllerusuario();
		$controlador->login($usuario, $password);

	}
	// if (!isset($_SESSION['count'])) {
		
	// 	$_SESSION['count'] = 0;
	
	// } else {
  		
 //  		$_SESSION['count']++;
	// }

?>