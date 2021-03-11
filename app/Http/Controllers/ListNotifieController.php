<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\firebaseService;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
class ListNotifieController extends Controller
{
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
    $ref = $database->getReference("User");
    
    $users = $ref->getValue();
     
   if (is_array($users) || is_object($users))
{
    foreach ($users as $user) {
    

    	$all_user[] = $user;

    }

    }
       	return view('ListCitoyensNotifie',['all_user' => $all_user]);

  
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
  public function edit($id)
  {
    
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
  public function destroy($id)
  {
    
  }
  
}
