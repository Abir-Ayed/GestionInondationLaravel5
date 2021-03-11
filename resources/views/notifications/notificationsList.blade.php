@extends('layouts.menu')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Listes Notifications
                <small>Notifications</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li class="active">Notifications</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
        <div class="box box-primary">
           
           

      <div class="row">
        <div class="col-md-12">
        
            <div class="box-header with-border">
              <i class="fa fa-warning"></i>

              <h3 class="box-title">Notification</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="alert alert-danger alert-dismissible">
                <div style="margin-left: 1038px;"> <a href="ListCitoyensNotifie"> <i class="fa fa-fw fa-check"></i></a></div>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
               @if(auth()->user()->unreadNotifications->count())
                    @foreach(auth()->user()->unreadNotifications as $notification)
                  
                  
                   
                          {{$notification->data['title']}}

                      
              
                    @endforeach
                    @endif
              </div>
             
              
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

      
        <!-- /.col -->
      </div>
            </div>
            <!-- /.box-body -->
        </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->


       
            

  
 

@endsection