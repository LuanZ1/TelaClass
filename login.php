<?php 
include 'ConexaoBanco.php';
session_start();

if (isset($_POST["login"])) {
    $email = $_POST["login"];
    $senha = $_POST["senha"];
    $_SESSION['login'] = $email;
    $_SESSION['senha'] = $senha;
    
    $login = false;
    if ($email == "" || $senha == "") {
        echo "<script>alert('Preencher todo os campos de login')</script>";
    }
    else {
        function verificaEmaillSenha($email, $senha, $Conexao) {
            
            $consulta = "SELECT * FROM usuarios WHERE login = '$email' and senha = '$senha'";
            $resultado = mysqli_fetch_assoc(mysqli_query($Conexao, $consulta));
            
            //echo $resultado["nome_usuario"];
            if ($resultado["login"] == $email && $resultado["senha"] == $senha) {
                return true;
            } else {
                
                return false;
            }
        }
        
        
        $sql = "SELECT * FROM usuarios";
        $consulta = $conector->query($sql);
        $login = verificaEmaillSenha($email, $senha, $conector);
        
        if ($login == false) {
            echo "<script>alert('Login ou senha incorretos');</script>";
            
        } else if ($login == true) {
            echo "<script>alert('login com sucesso');</script>";
            //echo "<a href='index.php'></a>";
            
            header("Location: index.php");
            
            
            
            
            
            
        }
    }
}

?>
<!DOCTYPE html>
<html>
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

      <form class="login-form" action="login.php" method="post">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i>TelaClass</p>
            <div class="input-group"> 
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="Login" autofocus name="login" >
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


