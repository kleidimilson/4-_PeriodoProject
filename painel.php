
<!DOCTYPE html>
<?php
    include('conexao.php');
     


    $consulta = "SELECT * FROM atividades";
    $con = $conexao->query($consulta) or die($conexao->error);

?>

<html dir="ltr" lang="pt-br">


  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <title>Tela admin</title>
    <link rel="shortcut icon"  href="img/favicon.ico" />
    <!-- Custom CSS -->
    <link href="./assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./dist/css/style.min.css" rel="stylesheet">
    <link href="./dist/css/estilo.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="http://localhost/4-_PeriodoProject/painel.php" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                              
                                <img src="./img/EVENTOPI.png" alt="homepage" class="light-logo" />
                            </b>
                           
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <h2>Página do administrador</h2>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="./assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                            <a class="dropdown-item" href="http://localhost/4-_PeriodoProject/user.php"><i class="ti-user m-r-5 m-l-5"></i>Mudar para participante</a>
                                <a class="dropdown-item" href="http://localhost/4-_PeriodoProject/"><i class=""></i>Sair</a>
                
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/4-_PeriodoProject/painel.php" aria-expanded="false">
                                <i class="mdi mdi-calendar"></i>
                                <span class="hide-menu">Programação</span>
                            </a>
                        </li>
                         
                    
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                                <i class="mdi mdi-account"></i>
                                <span class="hide-menu">Pessoas</span>
                            </a>
                        </li>
                         
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/4-_PeriodoProject/inscritos.php" aria-expanded="false">
                                <i class="mdi mdi-ticket"></i>
                                <span class="hide-menu">Inscrições</span>
                            </a>
                        </li>
                      
                       
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://localhost/4-_PeriodoProject/pag-certificados.php" aria-expanded="false">
                                <i class="mdi mdi-school"></i>
                                <span class="hide-menu">Certificados</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                                <i class="mdi mdi-desktop-mac"></i>
                                <span class="hide-menu">Página do evento </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                                <i class="mdi mdi-settings"></i>
                                <span class="hide-menu">Configuração</span>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Atividades</h4>
                    </div>
                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                
                <div class="row">
                    <div class="col-md-8">
                        <div  ng-controller="Atividade">
                            <ul class="nav nav-tabs space">
                                <li class="">
                                    <button type="button" class="btn btn-secondary">Atividades</button>
                                </li>
                                <li class="">
                                    <button type="button" class="btn btn-light">Convidados</button>
                                </li>
                                <li class="">
                                     <button type="button" class="btn btn-light">Locais</button>
                                </li>
                                <li class="">
                                    <a href="http://localhost/4-_PeriodoProject/cupom.php"><button type="button" class="btn btn-light">Cupons de descontos</button></a>
                                </li>
                                <li class="">
                                    <button type="button" class="btn btn-light">Dados de pagamento</button>
                                </li>


                            </ul>
                       </div>
                    </div>
                   
              
                   
                    
                </div>

                <div class="row">
                        <h4 id="text-atividade"></h4>
                        <form action="adicionar-atividade.php" method="POST" class="form-inline pull-right ng-pristine ng-valid">
                                <!---->
                                <div class="form-group">
                                    <select ng-model="filtro.necessitaInscricao" ng-change="filtrarAtividade(); " class="form-control ng-pristine ng-valid ng-empty ng-touched" st-delay="0" >
                                        <option ng-value="null" value="object:null" selected="selected">Todas as atividades</option>
                                        <option ng-value="true" value="boolean:true">Atividades com inscrição</option>
                                        <option ng-value="false" value="boolean:false">Atividades sem inscrição</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input ng-model="filtro.busca" type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" placeholder="Buscar" ng-change="filtrarAtividade();">
                                </div>
                                <div class="form-group">
                                  
                                </div>
                                <div class="form-group">
                                    <div class="dropdown">
                                        </button>
                                        <ul class="dropdown-menu space" aria-labelledby="dropdownMenu1">
                                            <li>
                                                <a href="#" target="_blank">Atividades</a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">Inscritos</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-verde" data-toggle="modal" data-target="#ModalLongoExemplo" >
                                        <i class="mdi mdi-plus"></i>
                                        Adicionar Atividade
                                    </button>
                                    <!-- Botão para acionar modal -->

                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="ModalLongoExemplo" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header header-modal">
                                                <h5 class="modal-title" id="TituloModalLongoExemplo">Adicionar Atividade</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                   
                                                        <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
                                                                </div>
                                                                <input name="nome-atividade" type="text" autocomplete="off" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default" required>
                                                        </div>
                                                        <div class="row">
                                                            
                                                            <div class="form-group space">
                                                                    <select name="tipo-atividade" class="form-control ng-pristine ng-valid ng-empty ng-touched" st-delay="0" >
                                                                        <option ng-value="null" value="object:null" selected="selected">Defina o tipo</option>
                                                                        <option ng-value="true" value="Apresentação cultural">Apresentação cultural</option>
                                                                        <option ng-value="false" value="Palestra">Palestra</option>
                                                                        <option ng-value="false" value="workshop">Workshop</option>
                                                                        <option ng-value="false" value="workshop">MiniCurso</option>
                                                                    </select>
                                                            </div>
                                                            <div class="form-group">
                                                                    <select name="atividade-valor" class="form-control ng-pristine ng-valid ng-empty ng-touched" st-delay="0" >
                                                                        <option ng-value="null" value="object:null" selected="selected">Inscrição</option>
                                                                        <option ng-value="true" value="gratuita">Gratuita</option>
                                                                        <option ng-value="false" value="paga">Paga</option>
                                                                        <option ng-value="false" value="não requer">Não requer inscrição</option>
                                                                    </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="input-group mb-4">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" autocomplete="off" id="">R$</span>
                                                                    </div>
                                                                    <input name="valor" type="text" autocomplete="off" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default" required>
                                                                </div>

                                                            </div>
                                                            <div class="form-group space">
                                                                    <select  name="atividade-duracao" class="form-control ng-pristine ng-valid ng-empty ng-touched" st-delay="0" >
                                                                        <option ng-value="null" value="object:null" selected="selected">Duração em dias</option>
                                                                        <option ng-value="true" value="1">1</option>
                                                                        <option ng-value="false" value="2">2</option>
                                                                        <option ng-value="false" value="3">3</option>
                                                                    </select>
                                                            </div>
                                                            <div class="form-group space">
                                                                    <select  name="atividade-sala" class="form-control ng-pristine ng-valid ng-empty ng-touched" st-delay="0" >
                                                                        <option ng-value="null" value="object:null" selected="selected">Sala</option>
                                                                        <option ng-value="true" value="1">1</option>
                                                                        <option ng-value="false" value="2">2</option>
                                                                        <option ng-value="false" value="3">3</option>
                                                                    </select>
                                                            </div>

                                                            <div class="form-group">
                                                                    <input name="atividade-data" class="form-control padd" type="date">
                                                                    <input name="atividade-hora" class="form-control padd" type="time">
                                                                    
                                                            </div>
                                                          <div class="form-group">

                                                            <input name="atividade-carga" class="form-control" type="text" placeholder="Carga horária">
                                                         </div>
                                                         


                                                           
                                                           
                                                        </div>
                                                    
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                            <button type="submit" class="btn btn-verde">Salvar Atividade</button>
                                                        </div>
                                                 
                                                        
                                                </div>
                                                   
                                            </div>
                                            </div>
                                        </div>
                                </div>
                        </form>
                            <div class="row">
                              


                                        <table class="table tabela-size">
                                        <thead id="cor" >
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">status</th>
                                            <th scope="col">Duração</th>
                                            <th scope="col">Valor</th>
                                            <th scope="col">Horário</th>
                                            <th scope="col">data de inicio</th>
                                            <th scope="col">sala</th>
                                            <th scope="col">Carga horária</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                               <?php while($dado = $con->fetch_array()){?>
                                            
                                            <tr>
                                                <td><?php echo $dado["id_atividade"] ?></td>
                                                <td><?php echo $dado["nome_atividade"] ?></td>
                                                <td><?php echo $dado["tipo_atividade"] ?></td>
                                                <td><?php echo $dado["status_valor"] ?></td>

                                                <td><?php echo $dado["duracao_atividade"] ?></td>
                                                <td><?php echo $dado["valor"] ?></td>
                                                <td><?php echo $dado["horario"] ?></td>
                                                <td><?php echo $dado["data_inicio"] ?></td>
                                                <td><?php echo $dado["sala"] ?></td>
                                                <td><?php echo $dado["cargaHoraria"] ?></td>
                                               
                                            </tr>
                                               <?php } ?>   
                                          
                                        </tbody>
                                        </table>

                                </div>
                           

                    <!-- column -->
                    
                                <!-- Comment Row -->
                                
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
       
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="./dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="./dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="./dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="./assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="./assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="./dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>