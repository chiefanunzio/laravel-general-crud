@extends('layouts.main-layout')
@section('content')
<h1>MATCH</h1>


<div class="match">
    <ul>  
        @if ($match ->result === 1)
        <li><h2>TEAM 1:  {{strtoupper($match->team1)}} punteggio: {{$match->point1}} <u>WINNER</u></h2></li>
        <li><h2>TEAM 2:   {{strtoupper($match->team2)}} punteggio: {{$match->point2}} <u>LOSER</u></h2></li>   
        @else 
        <li><h2>TEAM 1:  {{strtoupper($match->team1)}} punteggio: {{$match->point1}} <u>LOSER</u></h2></li>
        <li><h2>TEAM 2:   {{strtoupper($match->team2)}} punteggio: {{$match->point2}} <u>WINNER</u></h2></li>  

        @endif 
        <li><u>RISUTLATO: {{$match->result}}</u></li>
   
        
           
    </ul>      
</div>                  
<a href="{{route('delete', $match ->id)}}">delete match</a>   
    
<a href="{{route('editMatch', $match ->id)}}">update match</a>            
      
@endsection       