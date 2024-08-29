<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
  public function showRegistrationForm(){
    return view('register');
  }
  public function register(Request $request){
    //validate the request data
 $validatedData = $request->validate([
    'firstname'=>'required',
    'lastname'=>'required',
    'dob'=>'required',
    'schoolcode'=>'required',
    'admissionnumber'=>'required',
    'email'=>'required',
    'yearofstudy'=>'required',
    'password'=>'required',
    'confirmpassword'=>'required',
    'role'=>'required',

   ]);
    //creating a new notify me record
    Registration::create($validatedData);
    return redirect('/')->with('success','next time you will be able to login');

  }

}
