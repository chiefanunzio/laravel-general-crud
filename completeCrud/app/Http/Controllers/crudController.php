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

    private function getValidate(){

      return [
         'team1' => 'required|max:50',
         'team2' => 'required|max:50',
         'point1' => 'required|numeric',
         'point2'  => 'required|numeric',
         'result'=> 'required|numeric|max:2' 
      ];

    }

    public function addMatch(Request $request){

       $validate = $request -> validate($this -> getValidate());   

       $addMatch = Matche::create($validate);
       return redirect() -> route('match' , $addMatch ->id);   
              
    }   

    public function editFun($id){   

       $match = Matche::findOrFail($id);  
        return view('pages.update',compact('match'));    

    }

    public function uptadeFun(Request $request, $id){   
       $match = Matche::findOrFail($id); 

       $validate = $request -> validate($this -> getValidate());   
   

       $match -> update($validate);   

       return redirect() -> route('match', $match->id );
   
    }

     public function deleteMatch($id){

        $match = Matche::findOrFail($id);   
   
        $match -> delete();
           
        return redirect() -> route('home');       
              
   
    }   
}
      