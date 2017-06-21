<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale = 1" />
	<title>Mural IFSP - prc</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
		<nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Mural IFSP</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="mural.php">Mural</a></li>
                    <li><a href="#">Page 2</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cadastro.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
        
        <?php
			$cadastrado = 0;
			$login_valido = 0;
			if(isset($_GET['cadastrado'])){
				(base64_decode($_GET['cadastrado']) == 1)? $cadastrado = true : $cadastrado = false;
				if($cadastrado){
					echo "<div class='alert alert-success alert-dismissable'>";
					echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
					echo "<strong>Sucesso!</strong> Cadastrado com sucesso!.";
					echo "</div>";
				}
			}
			if(isset($_GET['login_valido'])){
				($_GET['login_valido'] == 1)? $login_valido = true : $login_valido = false;
				if($login_valido){
					echo "<div class='alert alert-danger alert-dismissable'>";
					echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
					echo "<strong>Falha!</strong> Email ou senha incorretos!";
					echo "</div>";
				}
			}
		?>
        
	<div class="row">
    	<div class="col-md-12">
        	<form class="form-horizontal" method="POST" action="php/loginConexao.php">
				<fieldset>
					<div class="form-group">
				        <label class="control-label col-xs-2"><p id="desc">Email</p></label>
				        <div class="col-xs-5">
				            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
				        </div>
				    </div>
				    <div class="form-group">
				        <label class="control-label col-xs-2"><p id="desc">Senha</p></label>
				        <div class="col-xs-5">
				            <input type="password" class="form-control" min="1"name="senha" placeholder="Senha">
							<input type="hidden" name="cod"/>
				        </div>
				    </div>
				 
				    <div class="form-group">
				        <div class="col-xs-offset-2 col-xs-10">
				            <button type="submit" class="btn btn-primary" name="btnCad">Enviar</button>
				        </div>
				    </div>
			    </fieldset>
			</form>  
        </div>
    </div>
</body
></html>