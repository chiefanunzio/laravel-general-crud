<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matche;   
class crudController extends Controller
{   
     public function homeFun() {

      $matches = Matche::all();

       return view('pages.home', compact('matches'));   
    }
   
    public function matchFun($id){

       $match = Matche::findOrFail($id);
       return view('pages.match', compact('match'));
    }
    
    public function formFun(){

      return view('pages.newMatch');   
    }

    public function addMatch(Request $request){

       $validate = $request -> validate([

         'team1' => 'required|max:50',
         'team2' => 'required|max:50',
         'point1' => 'required|numeric',
         'point2'  => 'required|numeric',
         'result'=> 'required|numeric|max:2'      
       ]);   

       $addMatch = Matche::create($validate);
       return redirect() -> route('match' , $addMatch ->id);   
              
    }   
}
      