<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barrage;
use Charts;
use DB;
use Date;

class ChartController extends Controller
{
  
            public function index()
    {


//$date = new Date();

$apports= DB::table('barrages')->select('apports')->orderBy('Date','desc')->limit(5);
//dd($apports);
$stock= DB::table('barrages')->select('stock')->orderBy('Date','desc')->limit(5);
$lachers= DB::table('barrages')->select('lachers')->orderBy('Date','desc')->limit(5);


//dd($barrage);
$area_chart = Charts::multi('area', 'highcharts')
			    ->title('Etats barrages')
			    ->elementLabel('million  m3')
			    ->colors(['#C5CAE9','#283593','#77ABD6'])
			    ->labels(['Abid', 'Lebna', 'masri','lebna','chiba'])
                 
                 ->dataset('stock',$stock->pluck('stock'))
                 ->dataset('apports',$apports->pluck('apports'))
                 ->dataset('lachers',$lachers->pluck('lachers'))
			    ->dimensions(1000,500)
			   
			    ->responsive(true);
//dd($stock);
  return view('charts', ['chart' => $chart], ['area_chart' => $area_chart] );


   	}


}
