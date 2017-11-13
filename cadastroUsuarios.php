<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">    
    <title>TelaClass - UIT</title>  
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  
  <body>
  <!-- container section start -->
  <section id="container" >
     
      
      <header class="header dark-bg">
            
            <!--logo start-->
            <a href="index.php" class="logo">TelaClass <span class="lite">Universidade de Itaúna</span></a>
            <!--logo end-->

            
            <div class="top-nav nav navbar-nav navbar-right">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">

                    <li> <a href="#"> <span class="username">Alterar dados cadastrais</span>  </a>	</li>
                    <li> <a href="#"> <span class="username">Ajuda</span>  </a>	</li>
                    <li> <a href="login.php"> <span class="username">Sair</span>  </a>	</li>
					

                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
     <aside>
          <div id="sidebar"  class="nav">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  
				  <li class="active">
                      <a href="admOpcoes.php">
                          <span>Usuários</span>
                      </a>
                  </li>

				  
                  <li>
                      <a class="" href="profOpcoes.php">
                          <span>Professores</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="alOpcoes.php">
                          <span>Alunos</span>
                          
                      </a>
                                         
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
       <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					
<!-- Basic Forms & Horizontal Forms-->
              
              <div class="row">
                  
                  <div class="col-lg-12">
                      <section class="">
                          <header class="panel-heading">
                              Cadastro de Usuário
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                      <label for="txtNome" class="col-lg-1 control-label">Nome: </label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" id="txtNome">
                                      </div>
								  </div>

								  <div class="form-group">                                  	  
                                      <label for="txtEndereco" class="col-lg-1 control-label">Rua: </label>
                                      <div class="col-lg-7">
                                          <input type="text" class="form-control" id="txtEndereco">
                                      </div>
									  
									  <label for="txtNro" class="col-lg-1 control-label">Nro.: </label>
                                      <div class="col-lg-1">
                                          <input type="text" class="form-control" id="txtNro">
                                      </div>
									  
									  <label for="txtComplemento" class="col-lg-1 control-label">Compl.: </label>
                                      <div class="col-lg-1">
                                          <input type="text" class="form-control" id="txtComplemento">
                                      </div>									  
									  
								  </div>
								  
								  <div class="form-group">  								  
                                      <label for="txtBairro" class="col-lg-1 control-label">Bairro: </label>
                                      <div class="col-lg-4">
                                          <input type="text" class="form-control" id="txtBairro">
                                      </div>	

                                      <label for="txtCidade" class="col-lg-1 control-label">Cidade: </label>
                                      <div class="col-lg-3">
                                          <input type="text" class="form-control" id="txtCidade">
                                      </div>	


                                      <label for="txtCEP" class="col-lg-1 control-label">CEP: </label>
                                      <div class="col-lg-2">
                                          <input type="text" class="form-control" id="txtCEP">
                                      </div>	

									  
								  </div>
									  
                                  <div class="form-group">                         
                                      <label for="txtCPF" class="col-lg-1 control-label">CPF: </label>
                                      <div class="col-lg-2">
                                          <input type="text" class="form-control" id="txtCPF">
                                      </div>				
                                  
								  
								                                      
                                      <label for="txtTelefone" class="col-lg-1 control-label">Telefone: </label>
                                      <div class="col-lg-2">
                                          <input type="text" class="form-control" id="txtTelefone">
                                      </div>	

                                      <label for="txtEmail" class="col-lg-1 control-label">E-mail: </label>
                                      <div class="col-lg-5">
                                          <input type="email" class="form-control" id="txtEmail">
                                      </div>
								  </div>	  

								  <div class="form-group">
									  <label for="txtLogin" class="col-lg-1 control-label">Login: </label>
                                      <div class="col-lg-3">
                                          <input type="text" class="form-control" id="txtLogin">
                                      </div>	

                                      <label for="txtSenha" class="col-lg-1 control-label">Senha: </label>
                                      <div class="col-lg-3">
                                          <input type="password" class="form-control" id="txtSenha">
                                      </div>
								  </div>
					  
								  <div class="form-group">
                                      <div class="col-lg-offset-1 col-lg-10">
                                          <button type="submit" class="btn btn-primary">Cadastrar</button>
                                      
                                          <a href = "admOpcoes.php" class="btn btn-danger">Cancelar</a>
                                      </div>								  
									  
                                  </div>
                              </form>
                          </div>
                      </section>
                      
                  </div>
              </div>
					
				</div>
			</div>
              
    	 
          </section>
          
      </section>
      <!--main content end-->
  </section>
  
    
  </body>
</html>
