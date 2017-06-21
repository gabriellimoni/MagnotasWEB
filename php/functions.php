<?php
	date_default_timezone_set('America/Sao_Paulo');

	function conectar(){
		$host = "localhost";
		$db = "mag_notas";
		$user = "root";
		$pass = "";
		$con =	mysqli_connect($host,$user,$pass);	
		if(mysqli_connect_errno($con)){
			die('não foi possivel conectar no banco' . mysqli_connect_error());
		}
		mysqli_select_db($con,$db);
		return $con;
	}
	
	function desconectar($conexao){
		mysqli_close($conexao);
	}
	
	function redireciona($page){
		header("Location: ". $page);
	}
	
	function codificasenha($senha){
		return md5($senha);
	}
	
	function md5_decrypt($enc_text, $password, $iv_len = 16)
	{
	   $enc_text = base64_decode($enc_text);
	   $n = strlen($enc_text);
	   $i = $iv_len;
	   $plain_text = '';
	   $iv = substr($password ^ substr($enc_text, 0, $iv_len), 0, 512);
	   while ($i < $n) {
		  $block = substr($enc_text, $i, 16);
		  $plain_text .= $block ^ pack('H*', md5($iv));
		  $iv = substr($block . $iv, 0, 512) ^ $password;
		  $i += 16;
	   }
	   return preg_replace('/\x13\x00*$/', '', $plain_text);
	}
	
	
	function calculaDataExpiracao($categoria){
		$data_atual = date_create();
		$dias = 0;
		$horas = 0;
		$minutos = 0;
		
		if($categoria == 0){
			$minutos = 1;
		}
		else if($categoria == 1){
			$dias = 7;
		}
		else if($categoria == 2){
			$dias = 15;
		}
		else if($categoria == 3){
			$horas = 12;
		}
		
		return strftime('%Y-%m-%d %H:%M:%S',(mktime(	
						date_format($data_atual,"H")+$horas,
						date_format($data_atual,"i")+$minutos,
						date_format($data_atual,"s"),
						date_format($data_atual,"m"),
						date_format($data_atual,"d")+$dias,
						date_format($data_atual,"Y"))));
		
	}
	
	// exclui as notas que ja venceram
	function verificaDataExpiracao(){
		$conn = conectar();
		$cmd = "DELETE FROM nota WHERE n_data_expira <= CURRENT_TIMESTAMP;";
	
	
		mysqli_query($conn, $cmd);
	}
?>