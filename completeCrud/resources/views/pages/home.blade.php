@extends('layouts.main-layout')
@section('content')
       
<body>
    
    <h2>MATCHES OF WEEK</h2>
    <a class="button" href="{{route('formMatch')}}">new match</a>     
    <div>         
        
        <ul>
            @foreach ($matches as $match)   
            <li>
                <h4>{{$match->team1}} --> {{$match->team2}} <a href="{{route('match', $match ->id)}}">risultato match</a></h4>
            </li>      
            @endforeach   
        </ul>                
</body>   
@endsection                  