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
<?php

$id = $_GET['id'];

require ("conectbd.php");

$result = mysqli_query($link, "SELECT * FROM forma_pagamento WHERE id = $id");

$dados = mysqli_fetch_array($result);

mysqli_close($link); /*Fecha a conexão com o BD*/


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
                                     
                    <li>
                         <li class="nav-item active">
                        <a class="nav-link" href="tipo_pagamento.php">
                            <i class="nc-icon nc-badge"></i>
                            <p>Tipos de Pagamento</p>
                        </a>
                    </li>
                    <li>
                         <li class="nav-item active">
                        <a class="nav-link" href="TDespesas.php">
                            <i class="nc-icon nc-money-coins"></i>
                            <p>Tipo de Despesas</p>
                        </a>
                    </li>
                     <li>
                         <li class="nav-item active">
                        <a class="nav-link" href="Cidade.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Cidades</p>
                        </a>
                    </li>
                    s
                    



                   
                   
                </ul>
            </div>
        </div>
        <div class="main-panel">
          

 


            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500" >
                <div class=" container-fluid  " >
                    <a class="navbar-brand" href="#pablo"> Formas de pagamento </a>
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
                                    <h4 class="card-title">Formas de Pagamento</h4>
                                    <p class="card-category">Editar Formas de Pagamento</p>
                                </div>



                 <form method="POST" name="form1" action="resp_edit_pagamento.php">
                       <div class="form-group">
                                        
                                        
                                        <input type="hidden" name="id" required class="form-control" value="<?php echo $dados['id']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label >Forma de Pagamento</label>
                                       <input class="form-control"  type='text' name="forma"  value="<?php echo $dados['forma']; ?>">
                                    </div>
                                    
                                     
                                     <div class="form-group">
                                        <button class="btn btn-raised btn-lg btn-warning" type="submit">Cadastrar</button>
                                    </div>

                                </form>
 
                                </div>
                            </div> 
                              
                      
                        </div>
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