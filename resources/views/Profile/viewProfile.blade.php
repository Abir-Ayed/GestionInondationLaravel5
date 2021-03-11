@extends('layouts.menu')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Profile
                
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li class="active"><a href="/conseils">Profile</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- left column -->
           
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
               
              <div class="col-md-12">
          <div class="nav-tabs-custom">
             <div class="box-header with-border">
                            <h3 class="box-title">Modifier Profile</h3>
                        </div>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                   
                        <span class="username">
                          <a href="#"> @if(Auth::check())
                                      {{Auth::user()->name}} 
                                  </a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">      {{Auth::user()->created_at}}</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                Email : {{Auth::user()->email}}<br><br>
                Dernier modification :  {{Auth::user()->updated_at}}
                  </p>
                
   
                </div>
                <!-- /.post -->

                <!-- Post -->
          
                  @endif  
                  
                    
                  
                 
                  
              </div>
              <!-- /.tab-pane -->
             <!--  <form action="/profile/" method="post">
  {{csrf_field()}}
{{method_field('DELETE')}}
               <div style="width: 100px; margin-left: 900px;">
                    <button type="button" class="btn btn-danger btn-block btn-sm"> <a href="{{url ('profile/'.Auth::user()->id.'/edit')}}" >Modifier</a></button>
                      </div>
                    </form>-->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

                </div>
                <!-- /.box -->
            </div>
            <!--/.col (right) -->
    </div>
    <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection