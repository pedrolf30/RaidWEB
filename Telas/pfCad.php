<?php 
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:login.html');
  }
 
$logado = $_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sabor ao Ponto</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>

    <section id="container" >


<?php
require("conectbdvendas.php");
?>

    
     
    <div class="wrapper">
        <div class="sidebar"  data-color="red" >
       

            <div class="sidebar-wrapper" >
                <div class="logo" >
                    <div class="logo">
                        <center></center>
                     <img src="../assets/img/logao.png">
                     </center>
                    </div>
                 
                </div>
                <ul class="nav">
                  
                    <li class="nav-item active">
                        <a class="nav-link" href="DashBoard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                             <li class="nav-item active">
                        <a class="nav-link" href="Vendas.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Vendas</p>
                        </a>
                    </li>
                        
                              
                         <li class="nav-item active" style="">
                        <a class="nav-link" href="Clientes.php">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Clientes</p>
                             
                        </a>
                    </li>
                    <li>
                         <li class="nav-item active">
                        <a class="nav-link" href="Funcionarios.php">
                            <i class="nc-icon nc-badge"></i>
                            <p>Funcionarios</p>
                        </a>
                    </li>
                    <li>
                         <li class="nav-item active">
                        <a class="nav-link" href="Fornecedores.php">
                            <i class="nc-icon nc-delivery-fast"></i>
                            <p>Fornecedores</p>
                        </a>
                    </li>
                    

                     <li class="nav-item active">
                        <a class="nav-link" href="Produtos.php">
                            <i class="nc-icon nc-backpack"></i>
                            <p>Produtos</p>
                        </a>
                    </li>

                    <li>
               
                     <li class="nav-item active">
                        <a class="nav-link" href="Despesas.php">
                            <i class="nc-icon nc-money-coins"></i>
                            <p>Despesas</p>
                        </a>
                    </li>
                    <li>
                        
                     <p style="font-size: 12px ; font-style:normal; font-family: Roboto; text-transform: uppercase; font-weight: bold; position: relative; left: 31px "> 
                                <i style="font-size: 30px;" class="nc-icon nc-cart-simple" > </i>  Relatorios </p>
                               <li class="dropdown" style="position: relative; left: 77px">
                                             <a href="#" class="dropdown-toggle" class="nav-link" data-toggle="dropdown" style="position: relative;left: 70px; bottom: 35px"> </a>
                             
                             <ul class="dropdown-menu">

            <li style="font-size: 12px ; font-style:normal; font-family: Roboto; text-transform: uppercase; font-weight: bold;  " class="pull-center"><a href="relatorio_vendas.php"><i class="nc-icon nc-chart-pie-35"></i>Relatorio Vendas</a></li>
            <li style="font-size: 12px ; font-style:normal; font-family: Roboto; text-transform: uppercase; font-weight: bold;  " class="pull-center"><a href="relatorio_despesas.php"><i class="nc-icon nc-chart-pie-35"></i>Relatorio Gastos</a></li>
          
           
          </ul>
        </li>

                    




                   
                   
                </ul>
            </div>
        </div>
        <div class="main-panel">
          

 


            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500" >
                <div class=" container-fluid  " >
                    <a class="navbar-brand" href="#pablo">Cadastro Pessoa Fisica </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation" data-color="red">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                           
                           
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="definir.php">
                                    <span class="no-icon">Definições</span>
                                </a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="login.html">
                                    <span class="no-icon">Sair</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
           <div class="container">
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body">
                                <h3><i class=""></i></h3>
           
                <form method="POST" name="form1" action="resp_pfCad.php">
                    
                         <div class="col-md-12 fundo" align="left"> 
                        <div  class="form-group"><label for="company" class=" form-control-label">CPF</label><input type="text"  name="cpf" placeholder="Digite o cpf" class="form-control"></div>

                       </div>
                         <div class="col-md-12 fundo" align="left">
                        <div class="form-group"><label for="vat" class=" form-control-label">Nome</label><input type="text" " name="nome" placeholder="Digite o nome" class="form-control"></div>
                       </div>

                         <div class="col-md-12 fundo" align="left">
                        <div class="form-group">
                            <label for="street" class=" form-control-label">Cidade</label>
                            <?php 
                                       $sql  = mysqli_query($con, "SELECT nome FROM cidade");?>
                                  <select class="form-control" name="cidade" >
                                 <?php
                                 while($resultado = mysqli_fetch_array($sql)){
                                                 ?>     
                                <option  value="<?=  $resultado['nome'] ?>"><?php echo $resultado['nome']; ?></option>
                               <?php } 
                                    ?>
                                </select>

   
                                    </div>
                        <div class="row form-group">
                          <div class="col-md-12 fundo" align="left">
                            <div class="form-group"><label for="city" class=" form-control-label">Bairro</label><input type="text"  placeholder="Digite o bairro"  name="bairro"  class="form-control"></div>
                          </div>
                          <div class="col-md-12 fundo" align="left">
                            <div class="form-group"><label for="postal-code" class=" form-control-label">Rua</label><input type="text" placeholder="Digite a rua"  name="rua"  class="form-control"></div>
                          </div>
                        </div>
                        <div class="form-group"><label for="country" class=" form-control-label">Cep</label><input type="text"  placeholder="Digite o cep" name="cep" class="form-control"></div>

                      <div class="form-group"><label for="company" class=" form-control-label">Número</label><input type="text"   name="numero"  placeholder="Digite o número" class="form-control"></div>
                       <div class="form-group"><label for="company" class=" form-control-label">Telefone</label><input type="text" name="telefone" placeholder="Digite o telefone" class="form-control"></div>
                       
                          </div>
                                     <div class="form-group">
                                        <button class="btn btn-raised btn-lg btn-warning" type="submit" name="input">Enviar</button>
                                    </div>

                                </form>
                                <div id="error_message" style="width:100%; height:100%; display:none; ">
                                    <h4>
                                        Error
                                    </h4>
                                    Sorry there was an error sending your form. 
                                </div>
                                <div id="success_message" style="width:100%; height:100%; display:none; ">
<h2>Success! Your Message was Sent Successfully.</h2>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
 <a class="nav-link" href="Clientes.php" ">
                                        <button style="position: relative; bottom: 83px; left: 186px" class="btn btn-raised btn-lg btn-warning" >Voltar</button>
                                    </a>

            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu">
                           <li>
                                <a href="#">
                                    Inicio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Empresa
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">TechnoRaid</a>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    </div>
   
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">

</script>

</html>