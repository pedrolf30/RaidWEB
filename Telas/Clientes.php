
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
                    <a class="navbar-brand" href="#pablo"> Clientes </a>
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
                                    <h4 class="card-title">Clientes</h4>
                                    <p class="card-category">Listagem de clientes</p>
                                </div>




      <div class="card-body table-full-width table-responsive">                          
    <table class="table table-hover table-striped">
        <tr>
            <th>CPF</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Bairro</th>
            <th>Rua</th>
            <th>CEP</th>
            <th>Numero Moradia</th>
            <th>Telefone</th>
            <th></th>
            <th></th>
        </tr>
<?php

require ("conectbd.php");

$result = mysqli_query($link, "SELECT * FROM clientes");

    while ($cont = mysqli_fetch_array($result)) {

    $cpf = $cont['cpf'];
    $nome = $cont['nome'];
    $cidade = $cont['cidade'];
    $bairro = $cont['bairro'];
    $rua = $cont['rua'];
    $cep = $cont['cep'];
    $numero = $cont['numero'];
    $telefone = $cont['telefone'];

        echo "<tr>

                <td>$cpf</td>
                <td>$nome</td>
                <td>$cidade</td>
                <td>$bairro</td>
                <td>$rua</td>
                <td>$cep</td>
                <td>$numero</td>
                <td>$telefone</td>


                <td><button><a href =\"edit_pessoa_fisica.php?cpf=$cpf\">Editar</a></button</td>
                <td><button><a href =\"del_pessoa_jurid.php?cpf=$cpf\">Deletar</a></button></td>

            

              </tr>";

        };


?>
    </table>


                                </div>
                            </div> 
                               <div class="form-group">
                                <a class="nav-link" href="pfCad.php">
                                        <button class="btn btn-raised btn-lg btn-warning" type="submit">Cadastrar</button>
                                    </div>
                      
                        </div>
                    </a>


                        





    
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