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
                      <a class="navbar-brand" href="index.php"><font color="#000000">Mural IFSP</font></a>
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
      
      
              <div id="principal2" style="padding-top:20px">
                  <div id="carrousel">
                     <div class="row">
                      <div class="col-md-12">
                              <br/>
                         </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="container">
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
                                                        <img src="img/calça.png" alt="Praticidade">
                                                        <div class="carousel-caption">
                                                          <!--<h3>Los Angeles</h3>-->
                                                          <!--<p>LA is always so much fun!</p>-->
                                                        </div>
                                                      </div>
                                  
                                                      <div class="item">
                                                        <img src="img/fone.png" alt="Chicago">
                                                        <div class="carousel-caption">
                                                        </div>
                                                      </div>
                                  
                                                      <div class="item">
                                                        <img src="img/notas.png" alt="New York">
                                                        <div class="carousel-caption">
                                                        </div>
                                                      </div>
                                                    </div>
                                  
                                                    <!-- Left and right controls -->
                                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                                      <span class="sr-only">Anterior</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                                      <span class="sr-only">Proximo</span>
                                                    </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                   </div>  
              </div>
  
          <div id="principal3">
              <div id="indexBox2">
              <div class="container-fluid">
                <h1>MAG Notas: Como funciona?</h1>      
                <p>Lorem Ipsum
  "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
  "Não há ninguém que ame a dor por si só, que a busque e queira tê-la, simplesmente por ser dor..."
  
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vestibulum velit at quam sagittis, vitae hendrerit mi euismod. Ut maximus ultricies quam. Vivamus quis lacus finibus, rhoncus lacus id, varius ante. Aliquam at ante pellentesque, efficitur velit vel, porta lorem. Curabitur nisi tortor, aliquam eu pellentesque in, blandit eu nibh. Etiam et augue rutrum, fermentum nibh sit amet, dictum diam. Pellentesque ultricies et erat a dapibus. Suspendisse mollis nulla in velit tincidunt, id ultrices orci pulvinar. In tempor dolor at ornare tempus. Curabitur in sagittis quam, id porta justo. Quisque rhoncus non erat eu dapibus. Duis eleifend dolor velit, eu tristique lectus maximus eu.
  
  Etiam dignissim cursus libero eget luctus. Cras dapibus blandit augue, sodales tempus velit facilisis at. Nulla vitae placerat ex. Nunc lobortis elit lorem, vel convallis ex congue rhoncus. Quisque consectetur semper ipsum, iaculis blandit justo elementum vitae. Mauris congue risus non justo efficitur scelerisque. Nunc euismod massa nec magna rhoncus, eu rhoncus justo faucibus. Integer consectetur malesuada purus, sed porttitor ex semper quis. Nulla tempus aliquet sapien, vel auctor ipsum sodales at. In hac habitasse platea dictumst. Aenean at nisi molestie, dictum mauris ut, luctus urna. Fusce scelerisque pellentesque enim. Nullam laoreet a libero quis congue. Aliquam leo dolor, euismod eget sapien et, gravida gravida nunc.
  
  Suspendisse nisl tellus, placerat ac placerat sit amet, egestas sagittis sapien. Nam luctus quam vel scelerisque sodales. Proin lectus mauris, convallis non mattis ac, dignissim et nisl. Duis finibus metus vitae lectus facilisis gravida. Suspendisse quis mattis eros. Suspendisse suscipit lorem ac tempus interdum. Aenean in odio vel nisl finibus dictum. Aliquam non neque aliquet diam molestie scelerisque. Mauris feugiat nisi et accumsan dignissim. Vestibulum pretium est lorem, id ultricies turpis convallis quis. Curabitur efficitur arcu dictum, sagittis urna non, semper tortor.
  
  Suspendisse gravida urna in arcu egestas accumsan. Sed id efficitur eros. Maecenas ac erat congue nunc sagittis tristique vitae vitae quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed sollicitudin erat erat, nec feugiat ligula accumsan consequat. Vivamus consequat dui a metus placerat ultricies. Integer aliquam turpis non lacus sodales placerat. Duis malesuada auctor volutpat. Nullam a pretium ligula, elementum laoreet lacus. Nulla at porttitor ligula.
  
  Pellentesque porttitor eu tellus non aliquet. Pellentesque feugiat bibendum nunc eget tempor. Nunc et quam magna. Vestibulum tincidunt, sem et venenatis accumsan, ex arcu porttitor orci, in euismod urna nisl vitae urna. Curabitur auctor fermentum nisi, non luctus augue molestie vitae. Nullam vehicula hendrerit purus, ut condimentum felis tempor vitae. Aenean ut pharetra tellus, vel interdum libero. Aliquam convallis iaculis sollicitudin. Phasellus id lacinia nisl. Nunc id laoreet erat. Duis nec purus eu eros mattis interdum..</p> 
                          
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
