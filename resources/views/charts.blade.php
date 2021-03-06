
@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="panel panel-primary">

         <div class="panel-heading">Charts In Laravel 5 Using Charts Package</div>

          <div class="panel-body">    
            <div class="row">
            <div class="col-md-6"> 
               {!! $chart->html() !!}
            </div>

            <br/><br/>
            
          <div class="col-md-6"> 
               {!! $area_chart->html() !!}
            </div>
           
         </div>

        </div>

    </div>

    {!! Charts::scripts() !!}
    {!! $chart->script() !!}
    
     {!! $area_chart->script() !!}
@endsection
