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
                <table  id="example" class="table table-bordered table-striped" >
                    <thead>
                    <tr>


                       <th>Email</th>
                       <th>Password</th>
                        <th>Etat</th>
                        <th>Action</th>

 
                    </tr>
                    </thead>
                    <tbody>
            @foreach($all_user as $user)
                   <tr>
                    <td >{{$user['email']}}</td>
                    <td >{{$user['password']}}</td>
                    
                    <form action="{{route('comptes_add')}}" method="POST">
                       {{ csrf_field() }}
                    <td><select class="form-control" name="etat" class="form-control">
                                <option value="accepter">accepter</option>
                                <option value="encours">en cours</option>


                            </select></td>
 <td>
 <input type="submit" name="Accepter"  value="Accepter" class="btn btn-success" />  </form>
                        </td>  
                        
                        </tr>
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