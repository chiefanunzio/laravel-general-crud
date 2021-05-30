@extends('layouts.main-layout')
@section('content')
       
<body>
    
    <h2>MATCHES OF WEEK</h2>
    <a class="button" href="{{route('formMatch')}}">NEW MATCH</a>     
               
        
        <ul>
            @foreach ($matches as $match)   
            <li>
                <h4>{{strtoupper($match->team1)}} <span class="vs">VS</span> {{strtoupper($match->team2)}} </h4>
                <a href="{{route('match', $match ->id)}}">risultato match</a>
            </li>      
            @endforeach      
        </ul>                   
</body>         
@endsection                              