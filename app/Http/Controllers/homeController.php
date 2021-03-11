<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barrage;
use Charts;
use DB;
use Date;

use App\firebaseService;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

$chart = Charts::create('bar','material')

  ->title("my cool chart")
  ->dimensions(0, 400)
  ->template("material")
  ->values([5,20,100])
//  ->values('Element 2', [15,30,80])
//  ->values('Element 3', [25,10,40])
  ->labels(['One', 'Two', 'Three']);

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

                 $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseService.json');

     $firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
    ->withDatabaseUri('https://flood-alert-f4089.firebaseio.com/')
    ->create();

   $database = $firebase->getDatabase();
 
   
 $images = $database->getReference("User")->getValue();
$j=0;


foreach ($images as $key => $image) {
//dd($images);
     $citoyens= count($images);
foreach ($image as $key => $img) {
if (is_array($img) || is_object($img))
{

 foreach($img as $key => $obs){
  $all_images[] = $obs;

    $c= count($all_images);

}
 }
// dd($all_images);
}

}
  return view('home',compact('c','chart','area_chart','citoyens'));


    }
    
      public function affiche()
    {
        return view('moris');
    }


  
}