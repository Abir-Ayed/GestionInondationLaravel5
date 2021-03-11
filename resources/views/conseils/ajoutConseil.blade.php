@extends('layouts.menu')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion Des conseils
                <small>Gestion des conseils</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/home"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li class="active"><a href="/conseils/create">Ajouter Conseils</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- left column -->
                <div class="col-xs-12">
                    <!-- general form elements -->
                    <div class="box box-primary ">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nouveau Conseil</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form  role="form" action="/conseils" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-xs-6">
 
                                        <div class=" form-group {{ $errors->has('objet') ? 'has-error' : '' }} ">
                                        <label >Objet</label>
  <input type="text" class="form-control" name="objet" value="{{ Request::old('objet') }}" placeholder="Entrer un objet">
                                            @if( $errors->has('objet'))
                                                <span class="help-block"> {{$errors->first('objet')}}</span>
                                                @endif
                                        </div>
              <div class=" form-group ">
                
                    <label >Période</label>
                                        
                  
                  <select class="form-control" name="periode">
                    <option>avant</option>
                    <option>pendant</option>
                    <option>apres</option>
                    
                  </select>
                
                                                        </div>
   <div class=" form-group {{ $errors->has('description') ? 'has-error' : '' }} ">
                  <label>Description</label>
                  <textarea class="form-control" rows="3"  name="description" placeholder="Description ..." value="{{ Request::old('description') }}"></textarea>
                    @if( $errors->has('description'))
                                                <span class="help-block"> {{$errors->first('description')}}</span>
                                                @endif
                </div>
                                    <div class="form-group">
                  
                                    <br>
                                        <div class="box-footer">
 <input type="reset" class="btn pull-right"  style="width: 120px;margin-right: 370px;" value="Annuler">
 <input type="submit" style="width: 120px;margin-left: 330px;margin-top: -40px;" class="btn btn-primary " value="Ajouter">
                                       
                                        </div>




                                </div>
                                </div>
                            </div>

                        </form>

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
