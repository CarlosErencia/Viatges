<?php


	error_reporting(-1);
	ini_set('display_errors','On');

	require_once('usuaris.php');


	$nom = $_GET['nom_user'];

	$password = md5($_GET['contrasenya']);
	
	$usuarios = new Usuari();

	$usuarios -> select($nom, $password);


	
		
		
//		session_start();
//		
//		$_SESSION['logedIn'];
//		header("Location: index.php");
//		
//	}else{
//		
//		header("Location: index.php");
//	
//	}


?>