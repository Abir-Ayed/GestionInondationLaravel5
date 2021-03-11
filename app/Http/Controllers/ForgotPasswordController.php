<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Reminder;
use App\User;
use Mail;
class ForgotPasswordController extends Controller
{
   public function forgot(){

   	return view('forgot');
   }
   public function password(Request $request){

 //  dd($request->all());

   	$user = User::whereEmail($request->email)->first();

   	if($user == null){


   		return redirect()->back()->with(['error' => 'votre email est incorrect']);
   	}

   	$user = Sentinel::findById($user->id);
   	$reminder = Reminder::exists($user) ? : Reminder::create($user);
   	$this->sendEmail($user, $reminder->code);

   	return redirect()->back()->with(['success' => 'Vérifier votre email']);
   }

   public function sendEmail($user,$code){

   	Mail::send(
          'email.forgot',
          ['user' => $user, 'code' => $code],
          function($message) use ($user){
            
            $message->to($user->email);
            $message->subject("$user->name, Réinitialisez votre mot de passe..");



          }

   	);
   }

   public function reset($email, $code){

   	$user = User::whereEmail($email)->first();

   	 	if($user == null){


   		echo 'Email not exists';
   	}

   	$user = Sentinel::findById($user->id);
   	$reminder = Reminder::exists($user);


   	if($reminder){
   		if($code == $reminder->code){
   			return view('email.reset_password_form')->with(['user' =>$user, 'code'=>$code]);
   		}else{
   			return redirect('/');
   		}
   	}else{

   		echo 'time expired';
   	}
   }

   public function resetPassword(Request $request, $email, $code){


   	$this->validate($request, [
          
          'password' => 'required|min:6|max:12|confirmed' ,
          'password_confirmation' => 'required|min:7|max:12'


   	]);

   	   	$user = User::whereEmail($email)->first();
   	   	if($user == null){


   		echo 'Email not exists';
   	}
   	    $user = Sentinel::findById($user->id);
	    $reminder = Reminder::exists($user);

   	    if($reminder){
   		if($code == $reminder->code){
   			

   			Reminder::complete($user, $code, $request->password);

   			return redirect('/login')->with('success', 'Password reset. Please login new passowrd');
   		}else{
   			return redirect('/');
   		}
   	}else{

   		echo 'time expired';
   	}
   }
}
