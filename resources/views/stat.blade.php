@extends('layouts.menu')
@section('content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tableau de bord
        <small>Tableau de bord</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="/home"><i class="fa fa-dashboard"></i>Accueil</a></li>
        
      </ol>
    </section>

    
     <!-- Main content -->
     
  
    
         <section class="content">
      <div class="row">
      
        <!-- ./col -->
      
    
        
       
          
        </div>
        <!-- /.col -->
      
 <div class="container">

       
          <!-- AREA CHART -->
         
        <div style="margin-top: -400px;">
  
    </div>
</div>
 
       
      <!-- /.row -->
    
       
        </section>

  <section class="content">

      <div class="row">
      
        <div class="col-md-3 col-sm-6 col-xs-6" style="margin-left:600px;margin-top: -400px;width: 370px;">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-fw fa-user-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Citoyens</span>
              <span class="info-box-number">2</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12" style="margin-left:600px;margin-top: -290px;width: 370px;">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-fw fa-camera"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Observations</span>
              <span class="info-box-number">{{  $c}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- =========================================================== -->

    
     
      </div>
   
     
</section>

@endsection