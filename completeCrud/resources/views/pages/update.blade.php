@extends('layouts.main-layout')
@section('content')
<h1>UPTADE MATCH</h1>   
   
<form method="POST" action="{{route('updateMatch' , $match ->id)}}">
         
    @csrf   
    @method('POST')   

    <input type="text" placeholder="modifica  nome team 1" value={{$match ->team1}} name="team1">
    <input type="text" placeholder="modifica nome team 2  " value={{$match ->team2}} name="team2">
    <input type="text" placeholder="modifica  punteggio 1" value={{$match ->point1}} name="point1">
    <input type="text" placeholder="modifica punteggio 2" value={{$match ->point2}} name="point2">
    <input type="text" placeholder="modifica risultato" value={{$match ->result}} name="result">
    <input type="submit" value="modifica match">   
</form>      


            
@endsection        