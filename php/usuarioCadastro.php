<?php
 
 	include_once 'functions.php';
 
  $nome = $_POST["nome"];
  $apelido = $_POST["apelido"];
  $email = $_POST["email"];
  $senha = codificasenha($_POST["senha"]);
  // $cargo = $_POST["optradio"];
  
  $email_valido = 0;
  
 
  $link = conectar();
  $sql = "INSERT INTO usuario(u_nome, u_apelido, u_senha, u_email)"
  			. " VALUES('$nome', '$apelido', '$senha', '$email');";
			
	if(validaForm($email)){
		mysqli_query($link, $sql);
		if(mysqli_affected_rows($link) == 1){
			redireciona("../index.php?cadastrado=1?email=".$email);
		}
	}
	else{
		// PASSAR VARIÁVEIS POR URL PARA RECARREGAR NO FORM DE CADASTRO
		// $url = "?nome=";
		// o que retornar 1 significa que já existe
		existeEmailUsuario($email)? 
			redireciona("../index.php?email_valido=1"):
				redireciona("../index.php?apelido_valido=1");
	}
  	desconectar($link);	
	
	// VALIDAÇÕES -------------------------------------------
	function validaForm($email){
		if(existeEmailUsuario($email)){
			
			return false;
		}
		
		return true;
	}
	
	
	
	function existeEmailUsuario($email)
	{
		$link = conectar();
	
		$sql = "SELECT * FROM usuario WHERE u_email = '$email'";
	
		$result = mysqli_query($link,$sql);
		if(mysqli_num_rows($result) > 0){
			desconectar($link);
			return true;
		}else{
			desconectar($link);
			return false;
		}

	}
	
	// --------------------------------------------------------------------------------
  
 ?>   
