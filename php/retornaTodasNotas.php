<?php

	include_once('functions.php');
	
	verificaDataExpiracao();
	
	function retornaTodasNotas(){
		$link = conectar();
  		$sql = "SELECT n_texto, n_assunto, n_data_expira, n_categoria, u_apelido "
					."FROM nota n, usuario u WHERE u._id = n.n_usu " 
					 ."ORDER BY n_categoria;";
	
	
		$res = mysqli_query($link, $sql);
		
		if (mysqli_num_rows($res) > 0)
		{
			$result["notas"] = array();
			
			while($row = mysqli_fetch_array($res)){
				$nota = array();
				$nota["texto"] = $row["n_texto"];
				$nota["assunto"] = $row["n_assunto"];
				$nota["apelido"] = $row["u_apelido"];
				$nota["data_expira"] = $row["n_data_expira"];
				$nota["categoria"] = $row["n_categoria"];
				
				array_push($result["notas"], $nota);
			}
			
			$result["result"] = 1;
		
		}
		else{
			$result["result"] = 0;
		}
		
		desconectar($link);
		
		return $result;
			
	}


?>