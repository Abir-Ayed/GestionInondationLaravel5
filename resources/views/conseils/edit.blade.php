@extends('layouts.menu')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion Des Conseils
                <small>Gestion des conseils</small>
            </h1>
            <ol class="breadcrumb">
                    <li><a href="home"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li> <a href="conseils">Conseils</a></li>
                <li class="active">Modifier Conseils</li>
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
                            <h3 class="box-title">Modifier Conseils</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="/conseils/{{$conseils->id_conseil}}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <div class=" form-group {{ $errors->has('date') ? 'has-error' : '' }} ">
                                            <label >Date</label>

                                            <input type="text" class="form-control" name="date" value="{{ $conseils->date }}" placeholder="Enter date">
                                            @if( $errors->has('date'))
                                                <span class="help-block"> {{$errors->first('date')}}</span>
                                            @endif
                                        </div>
                                        
                                             <div class=" form-group {{ $errors->has('objet') ? 'has-error' : '' }} ">
                                            <label >Objet</label>
                                            <input type="text" class="form-control" name="objet" value="{{ $conseils->objet }}" placeholder="Enter objet" >
                                            @if( $errors->has('objet'))
                                                <span class="help-block"> {{$errors->first('objet')}}</span>
                                            @endif
                                        </div>
                                       

                                        <div class=" form-group {{ $errors->has('periode') ? 'has-error' : '' }} ">
                                            <label >Période</label>
                                            <input type="text" class="form-control" name="periode" value="{{ $conseils->periode }}" placeholder="Enter periode">
                                            @if( $errors->has('periode'))
                                                <span class="help-block"> {{$errors->first('periode')}}</span>
                                            @endif
                                        </div>
                                      
                                        <div class=" form-group {{ $errors->has('description') ? 'has-error' : '' }} ">
                                            <label >Description</label>
                                            <input type="text" class="form-control" name="description"  value="{{$conseils->description }}" placeholder="Enter description">
                                            @if( $errors->has('description'))
                                                <span class="help-block"> {{$errors->first('description')}}</span>
                                            @endif
                                        </div>
                                       <br>
                                        <div class="box-footer">

                                            <input type="submit" class="btn btn-primary " value="Modifier">
                                            <input type="reset" class="btn pull-right" value="Annuler">
                                        </div>





                                    </div>
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