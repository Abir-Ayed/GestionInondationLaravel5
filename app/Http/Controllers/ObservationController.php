<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\firebaseService;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
class ObservationController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  { 


    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseService.json');

     $firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
    ->withDatabaseUri('https://flood-alert-f4089.firebaseio.com/')
    ->create();

   $database = $firebase->getDatabase();
   /* $ref = $database->getReference("User");
    
    $images = $ref->getValue();
   // dd($users);

   if (is_array($images) || is_object($images))
{
    foreach ($images as $image) {
      
      $all_images[] = $image;

    }

  //  dd($all_images);
    }*/


   
 $images = $database->getReference("User")->getValue();
$j=0;


foreach ($images as $key => $image) {

foreach ($image as $key => $img) {
if (is_array($img) || is_object($img))
{

 foreach($img as $key =>$obs){
  $all_images[] = $obs;

 
}
 }

 // dd($all_images);
}

}



    return view('observations.viewObservation',['all_images' => $all_images],['img' => $img]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {


  
}
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($i)
  {
     $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseService.json');

     $firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
    ->withDatabaseUri('https://flood-alert-f4089.firebaseio.com/')
    ->create();
    
        
    $database = $firebase->getDatabase();
   
   
 $images = $database->getReference("User/")->getValue();
$j=0;




foreach ($images as $keyImage => $image) {
  
  foreach ($image as $k => $img) {
if (is_array($img) || is_object($img))
{

 foreach($img as $key =>$obs){
if ($i==$j) {



  $database->getReference("User/".$keyImage."/".$k."/")->update([

      $key => 
      ['description' => $obs['description'],
      
     
      'name' => $obs['name'],
      'url'  =>  $obs['url'],
      'etat' => 'Traitée']
    ]);    
}
$j++;
}
}
}

 }   
    
  return redirect('observation');
  }




  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($i)
  {
      $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/firebaseService.json');

     $firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
    ->withDatabaseUri('https://flood-alert-f4089.firebaseio.com/')
    ->create();
    
        
    $database = $firebase->getDatabase();
   
    $images = $database->getReference("User/")->getValue();
    $j=0;

foreach ($images as $keyImage => $image) {
  
  foreach ($image as $k => $img) {
if (is_array($img) || is_object($img))
{

 foreach($img as $key =>$obs){
   
if ($i==$j) {

 
 
           $database->getReference("User/".$keyImage."/".$k."/")->getChild($key)->remove();

}
$j++;
}
}
}
}
return redirect('observation');
  }
  
}

?>