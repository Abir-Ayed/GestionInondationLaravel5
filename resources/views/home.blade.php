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
      <div style="width: 1300px;">
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><sup style="font-size: 20px"></sup></h3>

             <h2>Barrages</h2>
            </div>
            <div class="icon">
                            <i class="fa fa-fw fa-calculator"></i>

            </div>
            <a href="/barrage" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
        <!-- ./col -->
        <div style="width: 1300px;">
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3></h3>

              <h2>Observations</h2>
            </div>
            <div class="icon">
             <i class="fa fa-fw fa-eye"></i>
            </div>
            <a href="observation" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
       <div style="width: 1300px;">
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3></h3>
              

              <h2>Conseils</h2>
            </div>
            <div class="icon">
                <i class="fa fa-fw fa-lightbulb-o"></i>
            </div>
            <a href="/conseils" class="small-box-footer">Plus d'informations <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
        <!-- ./col -->
    
        
       
          
        </div>
        <!-- /.col -->
      
 <div class="container">

       
          <!-- AREA CHART -->
         
        <div style="margin-top: -400px;">
   <div class=" box-primary">
            <div class="row" >
            <div class="col-md-10"> 
               {!! $chart->html() !!}
            </div>

            <br/><br/>
            
          <div class="col-md-6"> 
               {!! $area_chart->html() !!}
            </div>
           
        
</div></div>
    </div>
</div>
    {!! Charts::scripts() !!}
    
    
     {!! $area_chart->script() !!}
       
      <!-- /.row -->
    
       
        </section>

  <section class="content">

      <div class="row">
      
        <div class="col-md-3 col-sm-6 col-xs-6" style="margin-left:600px;margin-top: -400px;width: 370px;">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-fw fa-user-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Citoyens</span>
              <span class="info-box-number">{{$citoyens}}</span>
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
              <span class="info-box-number"></span>
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