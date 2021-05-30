@extends('layouts.main-layout')
@section('content')
<h1>ADD MATCH</h1>   
   
<form method="POST" action="{{route('addMatch')}}">
   
    @csrf
    @method('POST')   

    <input type="text" placeholder="inserisci  nome team 1" name="team1">
    <input type="text" placeholder="inserisci nome team 2  " name="team2">
    <input type="text" placeholder="inserisci  punteggio 1" name="point1">
    <input type="text" placeholder="inserisci punteggio 2" name="point2">
    <input type="text" placeholder="inserisci risultato" name="result">
    <input type="submit" value="aggiungi match">   
</form>      


         
@endsection     