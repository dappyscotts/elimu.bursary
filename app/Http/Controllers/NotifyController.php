<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notify_me;
use Carbon\Carbon;

class NotifyController extends Controller
{

   public function index(){
    return view('notify');
  }
  public function store(Request $request){
    $validatedData = $request->validate([
        'email'=>'required',
        'phone_number'=>'required',
    ]);
    //creating a new notify me record
    Notify_me::create($validatedData);
    return redirect('/')->with('success','We will contact you');
  }
}
