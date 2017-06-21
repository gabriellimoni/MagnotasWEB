<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Mural IFSP - prc</title>
    <meta name="viewport" content="width=device-width, initial-scale = 1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
		<!--Topnav-->
		<nav class="navbar navbar-inverse"  id="navBar">
            <div class="container-fluid">
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
                    <li><a href="#newnota" onclick="openNav()"><span class="glyphicon glyphicon-sunglasses"></span>Nova Nota +</a></li>
                    <!--<li><a href="cadastroNota.php">Criar uma Nota</a></li>-->
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <?php
					  		session_start();
					  		if(isset($_SESSION["usuario"])){
								echo "<li><a>".$_SESSION["usuario"]."</a></li>";
								echo "<li><a href='php/logout.php'><span class='glyphicon glyphicon-log-in'></span><b> Logout</b></a></li>";
							}
					  ?>
                </ul>
            </div>
        </nav>
        
              <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               	<?php
                	echo "<p id='#apelido'>Bem-vindo <b>".$_SESSION["usuario"]."</b></p><!--Nome do usuario-->";
				?>
                  <div>
                  		<!--Imagem de login do usuario-->
                        <img src="img/teste.jpg" id="imgUsu" class="img-thumbnail"/>
                  </div>
                  <br><br>
                  
                  <div id="nomeCategoria">
					<a data-toggle="tooltip" data-placement="top" title="Cada categoria tem sua cor específica e uma duração">Categoria:</a>
                  </div>
                  
                  <div id="categoriaSide" onclick="addNota(0)">
                  		<p align="justify" class="notaSidenav modCarona">
                    		Carona<br />
                        </p>
                  </div>
                  
                  <div id="categoriaSide" onclick="addNota(1)">
                  		<p align="justify" class="notaSidenav modFesta">
                    		Festa<br />
                    	</p>
                  </div>
                  
                  <div id="categoriaSide" onclick="addNota(2)">
                  		<p align="justify" class="notaSidenav modAcademico">
                    		Acadêmico<br />
                    	</p>
                  </div>
                  
                   <div id="categoriaSide" onclick="addNota(3)">
                  		<p align="justify" class="notaSidenav modOutros">
                    		Outros<br />
                    	</p>
                  </div>
                  
                  
              </div>
            
            <!-- Use any element to open the sidenav -->
            <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
	  <div id="main"><!--tudo oq vai ficar a direita do sidenav tem q ficar dentro da main-->
        <!--Corpo da pagina-->
        <div id="painel">
        
        <?php
			// faz select na tabela de notas e retorna em uma var
			include_once('php/retornaTodasNotas.php');
			$result = retornaTodasNotas();
		
			// se tiver notas
			if($result["result"] == 1){
        	// enquanto tiver notas 
				$i = 0;
				
				// coloca a primeira linha
				echo "<div class='row'>";
				foreach($result["notas"] as $nota){
					$nota["data_expira"] = DateTime::createFromFormat('Y-m-d H:i:s',$nota["data_expira"]);
							
					// se for a quinta nota fecha div da linha e abre a próxima cria outra linha
					if($i % 4 == 0)
						echo "</div>";
					if($i % 4 == 0)
						echo "<div class='row'>";
 
					// varios ifs para ver a categoria e colocar a cor certa
					//carona
					if($nota["categoria"] == 0){
						echo "<div class='col-md-3'>";
						echo	"<p align='justify' class='nota modCarona'>";
						echo	"<b>".$nota["assunto"]."</b></br><br>".
									$nota["texto"]."<br><br><br>".
										"<i>".$nota["apelido"]."</i><br>".
											"<p align='center'>Expira em: ".
												$nota["data_expira"]->format("d/m/Y H:i")."</p>";
						echo	"</p>";
						echo"</div>";
							
					}
					// festa
					else if($nota["categoria"] == 1){
						echo "<div class='col-md-3'>";
						echo	"<p align='justify' class='nota modFesta'>";
						echo	"<b>".$nota["assunto"]."</b></br><br>".
									$nota["texto"]."<br><br><br>".
										"<i>".$nota["apelido"]."</i><br>".
											"<p align='center'>Expira em: ".
												$nota["data_expira"]->format("d/m/Y H:i")."</p>";
						echo	"</p>";
						echo"</div>";
							
					}
					// academico
					else if($nota["categoria"] == 2){
							echo "<div class='col-md-3'>";
						echo	"<p align='justify' class='nota modAcademico'>";
						echo	"<b>".$nota["assunto"]."</b></br><br>".
									$nota["texto"]."<br><br><br>".
										"<i>".$nota["apelido"]."</i><br>".
											"<p align='center'>Expira em: ".
												$nota["data_expira"]->format("d/m/Y H:i")."</p>";
						echo	"</p>";
						echo"</div>";
					}
					// outros
					else if($nota["categoria"] == 3){
						echo "<div class='col-md-3'>";
						echo	"<p align='justify' class='nota modOutros'>";
						echo	"<b>".$nota["assunto"]."</b></br><br>".
									$nota["texto"]."<br><br><br>".
										"<i>".$nota["apelido"]."</i><br>".
											"<p align='center'>Expira em: ".
												$nota["data_expira"]->format("d/m/Y H:i")."</p>";
						echo	"</p>";
						echo"</div>";
					}					
					
					$i++;
				}
				echo "</div>";
			}
         
		 ?>    
			
		</div>
     </div>  <!--Fecha a main do Sidenav-->
    
     
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
            
            
            
            
            
            
            
            <!-- Modal CARONA -->
                    <div class="modal fade" id="modCarona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content modCarona" >
                        	<form method="POST" action="php/cadastraNotaCarona.php">
                              <div class="modal-header">
                              	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <input type="text" name="caronaTitulo" placeholder="Título" size="23">
                                </h5>
                              </div>
                              <div class="modal-body">
                                  <textarea type="text" name="caronaTexto" placeholder="Texto da nota"  rows="10" cols="23" wrap="hard"></textarea>
                              </div>
                              <div class="modal-footer" align="center">
                                <button type="submit" class="btn btn-primary">Adicionar</button>
                              </div>
                           </form>
                        </div>
                      </div>
                    </div>
                    


			<!-- Modal FESTA -->
                    <div class="modal fade" id="modFesta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content modFesta" >
                        	<form method="POST" action="php/cadastraNotaFesta.php">
                              <div class="modal-header">
                              	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <input type="text" name="caronaTitulo" placeholder="Título" size="23">
                                </h5>
                              </div>
                              <div class="modal-body">
                                  <textarea type="text" name="caronaTexto" placeholder="Texto da nota"  rows="10" cols="23" wrap="hard"></textarea>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Adicionar</button>
                              </div>
                           </form>
                        </div>
                      </div>
                    </div>
                    
                    
              <!-- Modal ACADÊMICO -->
                    <div class="modal fade" id="modAcademico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content modAcademico" >
                        	<form method="POST" action="php/cadastraNotaAcademico.php">
                              <div class="modal-header">
                              	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <input type="text" name="caronaTitulo" placeholder="Título" size="23">
                                </h5>
                                
                              </div>
                              <div class="modal-body">
                                  <textarea type="text" name="caronaTexto" placeholder="Texto da nota"  rows="10" cols="23" wrap="hard"></textarea>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Adicionar</button>
                              </div>
                           </form>
                        </div>
                      </div>
                    </div>
                    
                    
            <!-- Modal OUTROS -->
                    <div class="modal fade" id="modOutros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content modOutros" >
                        	<form method="POST" action="php/cadastraNotaOutros.php">
                              <div class="modal-header">
                              	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <input type="text" name="caronaTitulo" placeholder="Título" size="23">
                                </h5>
                                
                              </div>
                              <div class="modal-body">
                                  <textarea type="text" name="caronaTexto" placeholder="Texto da nota"  rows="10" cols="23" wrap="hard"></textarea>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Adicionar</button>
                              </div>
                           </form>
                        </div>
                      </div>
                    </div>
</body>

	<script>
    function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
		document.getElementById("main").style.marginLeft = "250px";
	}
	
	/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("main").style.marginLeft = "0";
	} 
	
	$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
	});
	
	
	function addNota(categoria){
		if(categoria == 0)
			$('#modCarona').modal('show');
		if(categoria == 1)
			$('#modFesta').modal('show');
		if(categoria == 2)
			$('#modAcademico').modal('show');
		if(categoria == 3)
			$('#modOutros').modal('show');
	}
	
    </script>

</html>