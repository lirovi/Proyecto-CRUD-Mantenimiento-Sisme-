<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sisme Vue</title>
         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
        <link rel="stylesheet" href="css/font-awesome.css">
        
        <link rel="stylesheet" href="css/AdminLTE.min.css">
        <link rel="stylesheet" href="css/_all-skins.min.css">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="shortcut icon" href="img/favicon.ico">

              
    </head>
    <body>
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>S</b>V</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Sisme Vue</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Online</small>
                  <span class="hidden-xs">Limber Rojas</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li>
              <a href="{{ route('cargos.index') }}">
                <i class="fa fa-laptop"></i>
                <span>Cargos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            
            <li>
              <a href="{{ route('diagnosticos.index') }}">
                <i class="fa fa-laptop"></i>
                <span>Tipo Diagnósticos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
             
           <li>
              <a href="{{ route('equipos.index') }}">
                <i class="fa fa-laptop"></i>
                <span>Equipos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            
            <li>
              <a href="{{ route('funcionarios.index') }}">
                <i class="fa fa-laptop"></i>
                <span>Funcinonarios</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li>
              <a href="{{ route('dptos.index') }}">
                <i class="fa fa-laptop"></i>
                <span>Departamentos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li>
              <a href="{{ route('unidads.index') }}">
                <i class="fa fa-laptop"></i>
                <span>Unidades</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li>
              <a href="{{ route('tipoequipos.index') }}">
                <i class="fa fa-laptop"></i>
                <span>Tipo Equipos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li>
              <a href="{{ route('tipomants.index') }}">
                <i class="fa fa-laptop"></i>
                <span>Tipo Mantenimientos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li>
              <a href="{{ route('solucions.index') }}">
                <i class="fa fa-laptop"></i>
                <span>Tipo Soluciones</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li>
              <a href="{{ route('designacions.index') }} ">
                <i class="fa fa-laptop"></i>
                <span>Asignaciones</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li>
              <a href="{{ route('profesions.index') }} ">
                <i class="fa fa-laptop"></i>
                <span>Profesiones</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li>
              <a href="{{ route('mantenimientos.index') }} ">
                <i class="fa fa-laptop"></i>
                <span>Mantenimientos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
                       
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
           <div class="box-body">
              <div class="col-sm-11"> 
                <nav class="navbar navbar-dark bg-primary">
                      <a href="#" class="navbar-brand">Mantenimiento Equipos</a>

                    </nav>
                <div class="">

                    
                        <!--Contenido-->
                        @yield('content')
                        <!--Fin Contenido-->

                  </div>
                  
                </div>
              </div><!-- /.row -->
          </div><!-- /.box-body -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Desarrollado con </b> Laravel 5.7
        </div>
        <strong>Copyright &copy; 2018 </strong> All rights reserved.
      </footer>

      
     <script src="{{ asset('js/app.js') }}"></script>
      <script src="js/jQuery-2.1.4.min.js"></script>
      <!-- Bootstrap 3.3.5 -->
      <script src="js/bootstrap.min.js"></script>
      <!-- AdminLTE App -->
      <script src="js/app.min.js"></script>
      
     <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> jQuery 2.1.4 -->
      
    </body>
</html>
