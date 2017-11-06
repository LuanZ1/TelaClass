<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>TelaClass | Entrar</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />


</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" action="index.html">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i>TelaClass</p>
            <div class="input-group"> 
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="Login" autofocus name="login">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Senha" name="senha">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Lembrar-me
                <span class="pull-right"> <a href="#"> Esqueci minha senha</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Entrar</button>
        </div>
       
      </form>
 
    </div>
    

  </body>
</html>
<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "1q2w3e";
$banco = "telaclass";
// Linha para conexão ao Banco
$conector = new mysqli($servidor, $usuario, $senha, $banco);
// Verificando a conexão com o banco
if (mysqli_connect_errno())
    trigger_error(mysqli_connect_errno());
    
    $sql = "SELECT * FROM usuarios";
    $consulta = $conector->query($sql);
    while ($dados = $consulta->fetch_array()) {
        
        echo "Nome Cliente: " . $dados["login"] . "<br>";
    }
    echo "Registros encontrados: " . $consulta->num_rows;


$login = $_GET["login"];
$senha = $_GET["senha"];


?>
