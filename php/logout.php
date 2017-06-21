<?php
	include_once 'functions.php';

	session_start();
	
	unset($_SESSION["usuario"]);
	
	redireciona("..\index.php");
?>