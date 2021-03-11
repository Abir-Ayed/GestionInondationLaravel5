@extends('layouts.menu')
@section('content')

<script src="js/html2canvas.js" type="text/javascript"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/html2canvas.min.js" type="text/javascript"></script>
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
                Gestion Observations
                <small>Gestion Observations</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li class="active">Observations</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Liste des Observations</h3>
 
            <!-- /.box-header -->
            <div class="box-body " >
                <table  id="citoyens" class="table table-bordered table-striped" >
                    <thead>
                    <tr>

                     
                        <th>Photo</th>
                        <th>Description</th>
                        <th>Etat</th>
                        <th>Action</th>
 
                    </tr>
                    </thead>
                    <tbody>
        
                    @foreach ($all_images as $i => $obs)               
   <tr>
                          <td>   
             <span class="mailbox-attachment-icon has-img"><img src="{{$obs['url']}}"   style="width: 100px;height: 100px;"></span>
                  <div  id="html-content-holder" >
<div id="previewImage">
                  <div class="mailbox-attachment-info" >
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> {{$obs['name']}}</a>
                        <span class="mailbox-attachment-size">
                         
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                              
                        
                        </span>
                  </div>
                  </div>
                  </div>
                </td>
                          <td>{{$obs['description']}}</td> 
                               @if( $obs['etat'] != 'en cours')
                          <td>Votre reclamation est en cours de traitement</td>                
                              @endif
                             @if( $obs['etat'] != 'Traitée')
                          <td>En cours
</td>                
                              @endif    
<td><form action="/observation/{{$i}}" method="post">
                                    
               {{csrf_field()}} 
          
              {{method_field('DELETE')}}
               @if( $obs['etat'] != 'Traitée')
        
             <a href="{{url ('/observation/'.$i.'/edit')}}" ><button  type="button" class="btn btn-success btn-flat"><i class="fa fa-fw fa-eye"></i></button></a>
          {{csrf_field()}}
         {{method_field('DELETE')}}
         
             {{csrf_field()}}
         {{method_field('DELETE')}}
             <button type="submit" class="btn btn-danger btn-flat"><i class="fa fa-trash-o"  onclick="return confirmer()"></i></button>

 @else
       <i class="fa fa-fw fa-check"></i>@endif
            </form>
</td> </tr>
 @endforeach
                
    </tbody>
 
                </table>
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