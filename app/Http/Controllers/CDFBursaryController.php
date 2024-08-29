<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CdfBursaryApplication;
use Carbon\Carbon;

class CDFBursaryController extends Controller
{
    public function index(){
        return view('cdf-bursary');
    }
    public function store(Request $request){
      $validatedData = $request->validate([
      'gender'=>'required',
      'institution_type'=>'required',
      'institution_name'=>'required|string|max:255',
      'campus'=>'nullable|string|max:255',
      'faculty'=>'nullable|string|max:255',
      'course'=>'nullable|string|max:255',
      'mode_of_study'=>'required',
      'year_of_study'=>'required|integer|between:1,4',
      'expected_completion_date'=>'required|date',
      'personal_phone_number'=>'required|string|max:20',
      'institution_telephone_number'=>'nullable|string|max:20',
      'amount_applied_for'=>'required|numeric|min:0',
      'chief_verification_code'=>'required|string|max:255',
      'religious_leader_verification_code'=>'required|string|max:255',


      ]);

      //creating a new CDF Bursary Application record
      CdfBursaryApplication::create($validatedData);
      return redirect('/')->with('success','Your application was submitted!');
    }
}
