<?php
	include_once 'functions.php';
	
	session_start();
	
	$assunto = $_POST["caronaTitulo"];
	$texto = $_POST["caronaTexto"];
	$categoria = 3;
	$data_expira = calculaDataExpiracao($categoria);
	$usu_id = $_SESSION["usuario_id"];
	
	
	$link = conectar();
  	$sql = "INSERT INTO nota (n_assunto, n_texto, n_categoria, n_data_expira, n_usu)"
				." VALUES('$assunto', '$texto', $categoria, '$data_expira', $usu_id);";
	
	
	mysqli_query($link, $sql);
	if(mysqli_affected_rows($link) == 1){
		redireciona("../mural.php");
	}


?>