  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale = 1" />
      <title>Mural IFSP - PRC</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/style.css" />
  </head>
  
  <body>
          <nav class="navbar navbar-inverse navbar-fixed-top" id="navBar">
              <div class="container-fluid" id="logoMenu">
                  <div class="navbar-header">
                      <a class="navbar-brand" href="index.php">
                    	<a class="navbar-brand" href="index.php">
                        	<font color="#333333">
                            	<b>
                                <font size="+3">
                            		Mural
                            	</font> 
	                        
                               	<span>IFSP</span>
                                </b>
                            </font></a>
                    </a>
                  </div>
                  
                  <ul class="nav navbar-nav">
                      <li><a href="index.php">Início</a></li>
                      <?php
	      				  session_start();
						  if(isset($_SESSION["usuario"]))
	                      	echo "<li><a href='mural.php'>Mural</a></li>";
					  ?>
                      <!--<li><a href="cadastroNota.php">Criar uma Nota</a></li>-->
                  </ul>
                  
                  <ul class="nav navbar-nav navbar-right">
                      <!-- <li><a href="cadastro.php"><span class="glyphicon glyphicon-user"></span> Cadastrar-se</a></li> -->

					  <?php
					  		if(isset($_SESSION["usuario"])){
								echo "<li><a>".$_SESSION["usuario"]."</a></li>";
								echo "<li><a href='php/logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>";
							}
					  ?>
                      
                  </ul>
              </div>
          </nav>
          
          
          
          <!-- Espaço-->
          <div class="row">
                  
          </div>
           <!-- Espaço--> 
  
                  <div id="principal">
                      <div id="indexBox1">
                          <?php
						  	  if(!isset($_SESSION["usuario"])){
								  echo "<div class=1row1>";
								  echo	"<br /><br /><br />";
								  echo "</div>";
							  }
						  ?>
                               <!-- Espaço--> 
                          <?php
                              $cadastrado = 0;
                              $email_valido = 0;
                              if(isset($_GET['cadastrado'])){
                                  ($_GET['cadastrado'] == 1)? $cadastrado = true : $cadastrado = false;
                                  if($cadastrado){
                                      echo "<div class='alert alert-success alert-dismissable'>";
                                      echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                                      echo "<strong>Sucesso!</strong> Cadastrado com sucesso!.";
                                      echo "</div>";
                                  }
                              }
                              if(isset($_GET['email_valido'])){
                                  ($_GET['email_valido'] == 1)? $email_valido = true : $email_valido = false;
                                  if($email_valido){
                                      echo "<div class='alert alert-danger alert-dismissable'>";
                                      echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                                      echo "<strong>Falha no cadastro!</strong> Email já cadastrado!!";
                                      echo "</div>";
                                  }
                              }
                              if(isset($_GET['login_valido'])){
                                  ($_GET['login_valido'] == 1)? $login_valido = true : $login_valido = false;
                                  if($login_valido){
                                      echo "<div class='alert alert-danger alert-dismissable'>";
                                      echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                                      echo "<strong>Falha no login!</strong> Senha ou email incorretos!!";
                                      echo "</div>";
                                  }
                              }
                          ?>
                          <!--Login-->
                          <?php
                          		if(!isset($_SESSION['usuario'])){
									 echo "<div class='row'>";
										  // login
										  echo "<div class='col-md-6'>";
										  echo	  "<div id='indexLogin' class='container'>";
										  echo		"<h2>Login</h2>";
												
										  echo		"<form method='POST' action='php/loginConexao.php'>";
										  echo		  "<div class='form-group'>";
										  echo	 		"<label for='email'>Email:</label>";
										  echo			"<input type='email' class='form-control' id='emailLogin' placeholder='Digite seu email' name='email'>";
										  echo		  "</div>";
												  
										  echo		  "<div class='form-group'>";
										  echo			"<label for='pwd'>Senha:</label>";
										  echo			"<input type='password' class='form-control' id='senhaLogin' placeholder='Digite sua Senha' name='senha'>";
										  echo		  "</div>";
												  
										  echo		  "<div class='checkbox'>";
										  echo			"<label><input type='checkbox' id='lembrar' name='lembrar'>Lembrar-me</label>";
										  echo		  "</div>";
												  
										  echo		  "<button type='submit' class='btn btn-default'>Entrar</button>";
										  echo		"</form>";
												
										  echo	"</div>";
										  echo"</div>";
									  
										  // cadastro
										  echo"<div class='col-md-6'>";
										  echo    "<div id='indexLogin2' class='container'>";
										  echo       "<h2>Cadastre-se</h2>";
										  echo       "<form action='php/usuarioCadastro.php' method='POST'>";
										  echo          "<div class='form-group'>";
										  echo    	       "<label for='email'>Email:</label>";
										  echo             "<input type='email' class='form-control' id='email' placeholder='Digite um email' name='email'>";
										  echo		    "</div>";
														  
										  echo         "<div class='form-group'>";
										  echo              "<label for='nome'>Nome:</label>";
										  echo              "<input type='text' class='form-control' id='nome' placeholder='Digite seu nome' name='nome'>";
										  echo			"</div>";
														  
										  echo          "<div class='form-group'>";
										  echo              "<label for='apelido'>Apelido</label>";
										  echo              "<input type='text' class='form-control' id='apelido' name='apelido' placeholder='Digite um apelido'>";
										  echo          "</div>";
														  
										  echo          "<div class='form-group'>";
										  echo              "<label for='senha'>Senha:</label>";
										  echo              "<input type='password' class='form-control' id='senha' placeholder='Digite uma senha' name='senha'>";
										  echo          "</div>";
														  
										  echo          "<button type='submit' class='btn btn-default'>Cadastrar-se</button>";
										  echo       "</form>";
														
										  echo     "</div>";
										  echo"</div>";
										  echo"</div>";
									}
                                    
                               ?>   
                      </div>
                  </div>
      
      <br>      <br>
      
                  
                  <!--  CARROSEL -->                  
                          <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                              </ol>
                            
                              <!-- Wrapper for slides -->
                              <div class="carousel-inner">
                                <div class="item active">
                                  <img src="img/notas.png">
                                  <div class="carousel-caption">
                                  </div>
                                </div>
                            
                                <div class="item">
                                  <img src="img/fone.png">
                                  <div class="carousel-caption">
                                  </div>
                                </div>
                            
                                <div class="item">
                                  <img src="img/calça.png">
                                  <div class="carousel-caption">
                                  </div>
                                </div>
                              </div>
                            
                              <!-- Left and right controls -->
                              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                              </a>
                         </div>
                  
                  
                  
                  
  
          <div id="principal3">
              <div id="indexBox2">
              <div class="container-fluid">
                <h1>MAG Notas: Como funciona?</h1>      
                <p>MagNotas trás um novo sistema de notas compartilhadas, adicione ao quadro, 
                notas de duração pré definidas em tempo real, não se preocupe em ter que remover 
                notas antigas, vai dar carona e sai em 1 minuto? Deixe uma nota verde! Tem uma festa 
                no fim de semana? Deixe uma nota rosa! Se o foco é Acadêmico deixe uma nota azul 
                ou se não tiver um assunto específico utiliza a amarela!</p>
				<p>Defina suas notas por categoria, assim fica muito mais fácil localizar e controlar 
                suas durações, tenha certeza que seu aviso vai ser notado!</p>
				<p>Crie notas de forma simples e rápida, faça já seu cadastro e passe a desfrutar de todos 
                os recursos. É rápido e prático, não gaste papel e caneta, economize em notas amassadas, 
                apenas edite o que foi salvo!</p>
				<p>Nosso objetivo é expandir ainda mais as funcionalidades do Magnotas sem deixar a 
                simplicidade de lado. Afinal, notas são boas por esse motivo!</p>
				<br><br>
				<p>Sobre: o grupo MAG é formado por três estudantes de ADS (Análise e Desenvolvimento de 
                Sistemas) no Instituto Federal De São Paulo, com o objetivo de iniciar estudos em 
                desenvolvimento web. Em um dos projetos, surgiu a ideia de criação de algo simples que pudesse
                substituir o mural de avisos do campus, algo que fosse tão prático quanto, e muito mais visível, 
                MAGnotas é um desafio qual acreditamos, venha fazer parte dessa equipe!</p>
				<br /><br />

				<p>
				Disponível para Navegador e Android, futuramente para outras plataformas.</p>
</p> 
                          
              </div>
           
          </div>
  
          <br /><br />
      
      </div>
      </div>
          
              <!-- Espaço-->
              <div class="row">
              <br /><br />
              </div>
              <!-- Espaço--> 
                  
          <footer class="footer-distributed">
                      <div class="footer-left">
                          <h3>MAG<span>Notas</span></h3>
                          <p class="footer-company-name">MagNotas &copy; 2017</p>
          
                          <div class="footer-icons">
                              <a href="#"><i class="fa fa-facebook"></i></a>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                              <a href="#"><i class="fa fa-linkedin"></i></a>
                              <a href="#"><i class="fa fa-github"></i></a>
          
                          </div>
          
                      </div>
          
                      <div class="footer-right">
          
                          <p>Contato</p>
          
                          <form action="#" method="post">
          
                              <input type="text" name="email" placeholder="Email" />
                              <textarea name="message" placeholder="Mensagem"></textarea>
                              <button>Enviar</button>
          
                          </form>
          
                      </div>
              </footer>
  
  </body>
  
  </html>
