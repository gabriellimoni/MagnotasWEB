<?php
 
 	include_once 'functions.php';
 
  $email = $_POST["email"];
  $senha = codificasenha($_POST["senha"]);
  
  
  /*
  if($cargo == "rbAluno")
  	$cargo = 1;
  else
  	$cargo = 0;
  */
  $link = conectar();
  $sql = "SELECT u_email, u_senha, u_apelido, _id FROM usuario WHERE u_email = '$email' AND u_senha = '$senha';";
			
	$res = mysqli_query($link, $sql);
	if(mysqli_num_rows($res) == 1){
		redireciona("..\mural.php");
		
		// starta sessão para salvar variável do usuário
		session_start();
		
		while($row = mysqli_fetch_array($res)){
			$_SESSION["usuario"] = $row["u_apelido"];
			$_SESSION["usuario_id"] = $row["_id"];
		}
		
	}
	else{
		// PASSAR VARIÁVEIS POR URL PARA RECARREGAR NO FORM DE CADASTRO
		redireciona("..\index.php?login_valido=1");
	}
  	desconectar($link);	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	// --------------------------------------------------------------------------------
  
 ?>