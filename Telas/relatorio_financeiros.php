
<?php 
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:login.html');
  }
 
$logado = $_SESSION['login'];
?><!DOCTYPE html>
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
                    <a class="navbar-brand" href="#pablo"> Relatorio Financeiros </a>
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
            <!-- End Navbar -->
           <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Relatorio</h4>
                                    <p class="card-category">Financeiro</p>
                                </div>

<div class="span8">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-list-alt"></i>
                </span>
                
             <div class="widget-content">
                <form target="_blank"  method="get">
                <div class="span12 well">
                    
                    <div class="span6">
                        <label for="">Vencimento de:</label>
                        <input type="date" name="dataInicial" class="form-control" />
                    </div>
                    <div class="span6">
                        <label for="">até:</label>
                        <input type="date" name="dataFinal" class="form-control" />
                    </div>
                    
                </div>

                <div class="span12 well" style="margin-left: 0">
                    <div class="span6">
                        <label for="">Tipo:</label>
                        <select name="tipo" class="form-control">
                            <option value="todos">Todos</option>
                            <option value="receita">Receita</option>
                            <option value="despesa">Despesa</option>
                        </select>
                    </div>
                   

                </div>
                <div class="span12" style="margin-left: 0; text-align: center">
                    <input type="reset" class="btn" value="Limpar" />
                    <button class="btn btn-inverse"><i class="icon-print icon-white"></i> Imprimir</button>
                </div>
                </form>
                &nbsp
            </div>



                         

 




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
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
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

</html>