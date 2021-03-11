@extends('layouts.menu')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion Comptes
                <small>Gestion Comptes</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li class="active">Comptes</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Liste des Comptes</h3>
  
            </div>
            <!-- /.box-header -->
            <div class="box-body " >
                <table  id="citoyens" class="table table-bordered table-striped" >
                    <thead>
                    <tr>

                     
                        <th>Email</th>
                        <th>Password</th>
                        <th>Etat</th>
                        <th>Action</th>
 
                    </tr>
                    </thead>
                    <tbody>
         @foreach ($all_user as $i => $user)
                          
   <tr>
                             <td>{{$user['name']}}</td> 
                             <td>{{$user['email']}}</td>
                           

                          <td>
                 @if($user['etat'] != 'accept')           
  <button type="button" class="btn btn-danger" ><i class="fa fa-fw fa-close"></i></button>

  @else

   <button type="button" class="btn btn-success"><i class="fa fa-fw fa-check"></i></button>@endif


                            </td>
                                              

<td><form action="/citoyen/{{$i}}" method="post">
                

                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                  <a href="{{url ('/citoyen/'.$i.'/edit')}}" class="btn btn-block btn-success btn-sm" style="width: 90px;margin-top: 10px;" >Ajouter</a>
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                     
                             <button type="submit" class="btn btn-block btn-danger btn-sm" style="width: 90px;margin-left: 100px;margin-top: -30px;">Supprimer</button></form>
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
@endSection