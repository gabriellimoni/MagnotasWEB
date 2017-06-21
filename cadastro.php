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
        
	<div class="row">
    	<div class="col-md-12">
        	<form class="form-horizontal" method="POST" action="php/usuarioCadastro.php">
				<fieldset>
					<div class="form-group">
				        <label class="control-label col-xs-2"><p id="desc">Nome</p></label>
				        <div class="col-xs-5">
				            <input maxlength=50 type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">
				        </div>
				    </div>
				    <div class="form-group">
				        <label class="control-label col-xs-2"><p id="desc">Nick</p></label>
				        <div class="col-xs-5">
				            <input maxlength=10 type="text" class="form-control" min="1"name="apelido" placeholder="Digite seu nick para acesso">
							<input type="hidden" name="cod"/>
				        </div>
				    </div>
				    <div class="form-group">
				        <label class="control-label col-xs-2"><p id="desc">Email</p></label>
				        <div class="col-xs-5">
				            <input maxlength=30 type="email" class="form-control"  min="1"  name="email" placeholder="Digite seu email">
				        </div>
				    </div>
				    <div class="form-group">
				        <label class="control-label col-xs-2"><p id="desc">Senha</p></label>
				        <div class="col-xs-5">
				            <input maxlength=12 type="password" class="form-control"  min="1" name="senha" placeholder="Digite sua senha">
				        </div>
				    </div>
                    <!--
                    <div class="form-group">
						<label class="control-label col-xs-2"><p id="desc">Cargo</p></label>
                        <div class="col-xs-1">
                            <label class="radio-inline"><input type="radio" checked="checked" name="optradio" value="rbAluno" /><p id="desc">Aluno</p></label>
                        </div>
                        <div class="col-xs-1">
                            <label class="radio-inline"><input type="radio" name="optradio" value="rbServidor" /><p id="desc">Servidor</p></label>
                        </div>
                    </div>
				 -->
				    <div class="form-group">
				        <div class="col-xs-offset-2 col-xs-10">
				            <button type="submit" class="btn btn-primary" name="btnCad">Enviar</button>
				        </div>
				    </div>
			    </fieldset>
			</form>  
        </div>
    </div>
</body>
</html>