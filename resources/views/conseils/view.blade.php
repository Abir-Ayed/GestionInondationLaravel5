@extends('layouts.menu')

@section('content')

<script type="text/javascript">
    function confirmer(){
        return confirm("Etes vous sur !");
    }
</script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion des conseils
                <small>Gestion des conseils</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="home"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li class="active"><a href="/conseils">Conseils</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

           <div class="row no-print">
          <div class="row">
        <div style="margin-left: 30px;" class="col-xs-11">
        
  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Liste des conseils</h3>
             <div class="box-body">
                                    <a href="/conseils/create">  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                        <div class="col-md-3 col-sm-4"><i class="fa fa-fw fa-plus"></i> Ajouter conseils</div>
                                    </button></a>

                                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Date</th>
                  <th>Objet</th>
                  <th>Période</th>
                  <th>Description</th>
                  <th>Action</th>
                 
                </tr>
                   @foreach($tab as $value)
                <tr>
                
                    
                            <td>{{$value->date }}</td>
                            <td>{{$value->objet }}</td>
                            <td>{{$value->periode }}</td>
                            <td>{{$value->description }}</td>
                         

                                <td>

               <form action="/conseils/{{$value->id_conseil}}" method="post">
                                        {{csrf_field()}}
                                       {{method_field('DELETE')}}
     <a href="{{url ('/conseils/'.$value->id_conseil.'/edit')}}" class="btn-warning btn glyphicon glyphicon-pencil" ></a>
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                     
                             <button type="submit"  onclick="return confirmer()" class="btn-danger btn glyphicon glyphicon-trash"></button></form> </td>
                        </tr>
                        @endforeach

              
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </div>
            
         
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>


    
<script src="js/jspdf.js"></script>
    <script src="js/jquery-2.1.3.js"></script>
    <script src="js/pdfFromHTML.js"></script>
<script src="js/jspdf.js"></script>
    <script src="js/jquery-2.1.3.js"></script>
    <script src="js/pdfFromHTML.js"></script>
    <!-- /.content-wrapper -->

@endsection