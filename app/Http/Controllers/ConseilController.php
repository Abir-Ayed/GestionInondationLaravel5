<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Conseil;
use DB;
class ConseilController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
     $con = Conseil::all();
      
            return view('conseils.view', ['tab' => $con]); 

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
     return view('conseils.ajoutConseil');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    if($request->isMethod('POST')){
        
 $this->validate($request,[
     'objet'=>'required|max:30',
     
     'date'=>'required',
     'periode'=>'required',
     'description'=>'required',

 ]);

             $bl = new Conseil();

             $bl->objet = ($request->input('objet'));
          //   $bl->date= ($request->input('date_conseil'));
             $bl->periode = ($request->input('periode'));
             $bl->description= ($request->input('description'));
          
                            
             $bl->save();

            return redirect('conseils');
  }
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
    // $conseils=DB::table('conseils')->find($id);
   $conseils = Conseil::find($id);
 //dd($conseils);
      return view('conseils.edit', ['conseils' => $conseils]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id,Request $request)
  {


  $this->validate($request,[
     'objet'=>'required|max:30',
     
     'date'=>'required',
     'periode'=>'required',
     'description'=>'required',

 ]);


      $conseils = Conseil::find($id);
     
           $conseils->date = ($request->input('date'));
          
           $conseils->objet = ($request->input('objet'));
           $conseils->periode = ($request->input('periode'));
           $conseils->description = ($request->input('description'));
         
           $conseils->save();
         
 return redirect('conseils');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request,$id)
  {
      
       
            $con=Conseil::find($id);
            $con->delete();
            return redirect('conseils');
      
  }
  
}

?>