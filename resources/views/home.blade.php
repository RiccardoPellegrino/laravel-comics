@extends('layouts.app')

@section('content')
<h1>Home page</h1>
<ul>
    @foreach ($comics as $comic)
        <li>
           <h1>{{$comic['title']}}</h1> 
           <img src="{{$comic['thumb']}}" alt=""> 
        </li>
    @endforeach
</ul>
@endsection