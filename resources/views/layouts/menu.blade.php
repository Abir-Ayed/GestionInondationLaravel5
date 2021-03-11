<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Flood Alert</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('Admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('Admin/dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

  <!-- fullCalendar -->
  <link rel="stylesheet" href="{{asset('Admin/bower_components/fullcalendar/dist/fullcalendar.min.css')}}">
  <link rel="stylesheet" href="{{asset('Admin/bower_components/fullcalendar/dist/fullcalendar.print.min.css')}}" media="print">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Admin/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('Admin/dist/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js does')}}n't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="/home" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>GP</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Flood Alert</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">

                      @if(Auth::check())
   <ul class="nav navbar-nav">
<li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-danger">{{auth()->user()->unreadNotifications->count()}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Vous avez {{auth()->user()->unreadNotifications->count()}} notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    @if(auth()->user()->unreadNotifications->count())
                    @foreach(auth()->user()->unreadNotifications as $notification)
                    <a href="#">
                      <i class="fa fa-fw fa-bullhorn text-danger">
                   
                          {{$notification->data['title']}}

                      </i> 
                          
                    </a>
                    @endforeach
                    @else
                      <a href="#">
                    aucune notification
                      </i> 
                          
                    </a>
                    @endif
                  </li>
                  
                 
                  <li>
                 
                </ul>
              </li>
              <li class="footer"><a href="notifications">Voir tout</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
     
                         @endif
    </ul>
                <ul class="nav navbar-nav">
                     
                        <!-- Authentication Links -->
                     
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="glyphicon glyphicon-user"></i>
                                    @if(Auth::check())
                                      {{Auth::user()->name}}
                                      @endif
                                       <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                     <li >
                                        <a href="/profile">
                                           <i class="fa fa-fw fa-user"></i>
                                            Profile
                                        </a>

                                    </li>
                                    <li >
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                                            Déconnexion
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
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
 <div class="user-panel">
                                <div class="pull-left image">
                                    <img src="Admin/dist/img/user.png" class="img-circle" alt="User Image">
                                </div>
                                <div class="pull-left info">
                                    
                                  </p>
                                    <a href="#"><i class="fa fa-circle text-success"></i>En ligne</a>
                                </div>
                            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
           <ul class="sidebar-menu" data-widget="tree">
 <li></li><br>
 
<li class="active" >
                    <a href="home">
                        <i class="fa fa-dashboard"></i> <span>Tableau de bord</span>

                    </a>
</li>
 
                <li >
                    <a href="citoyen">
                        <i class="fa fa-fw fa-users"></i> <span>Gestion comptes</span>

                    
</a>
                </li>
                
                  
               <li >
                    
               
                                <li>
                                    <a href="/barrage">
                                        <i class="fa fa-fw fa-calculator"></i> <span>Barrages</span>
                                        
                                    </a>

                                </li> 
        </li>
           <li class="treeview">
                    
               
                                <li>
                                    <a href="/conseils">
                                        <i class="fa fa-fw fa-lightbulb-o"></i> <span>Conseils</span>
                                        
                                    </a>

                                </li> 
        </li>
        <li class="treeview">
                    
               
                                <li>
                                    <a href="observation">
                                        <i class="fa fa-fw fa-eye"></i> <span>Observations</span>
                                        
                                    </a>

                                </li> 
        </li>
      

            </ul>
     


        </section>
        <!-- /.sidebar -->
    </aside>

     @yield('content')

    
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('Admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('Admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('Admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('Admin/bower_components/chart.js/Chart.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('Admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('Admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('Admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('Admin/bower_components/raphael/raphael.min.js')}}"></script>

<script src="{{asset('Admin/bower_components/morris.js/morris.min.js')}}"></script>

<scrip>

<script src="{{asset('Admin/dist/js/adminlte.min.js')}}"></script>

<script src="{{asset('Admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('Admin/dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
<script type="text/javascript">
   
  $(function () {
    "use strict";

    // AREA CHART
    var area = new Morris.Area({
      element: 'revenue-chart',
      resize: true,
      data: [
        {y: ' Q1', item1: 2666, item2: 2666,  item3: 2600},
        {y: ' Q2', item1: 2778, item2: 2294,  item3: 2606},
        {y: ' Q3', item1: 4912, item2: 1969,  item3: 2686},
        {y: ' Q4', item1: 3767, item2: 3597,  item3: 2676},
        {y: ' Q1', item1: 6810, item2: 1914,  item3: 2766},
        {y: ' Q2', item1: 5670, item2: 4293,  item3: 2566},
        {y: ' Q3', item1: 4820, item2: 3795,  item3: 2666},
        {y: ' Q4', item1: 15073, item2: 5967, item3: 2666},
        {y: ' Q1', item1: 10687, item2: 4460, item3: 2666},
        {y: ' Q2', item1: 8432, item2: 5713,  item3: 2666}
      ],
      xkey: 'y',
      ykeys: ['item1', 'item2','item3'],
      labels: ['Item 1', 'Item 2', 'Item3'],
      lineColors: ['#a0d0e0', '#3c8dbc'],
      hideHover: 'auto'
    });
    });
</script>
</body>
</html>
