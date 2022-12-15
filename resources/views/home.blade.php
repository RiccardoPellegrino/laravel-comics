@extends('layouts.app')

@section('content')
<h3 class="text-center">Home page</h3>
<ul>
    @foreach ($comics as $comic)
        <li>
           <h3>{{$comic['title']}}</h3> 
           <img src="{{$comic['thumb']}}" alt=""> 
        </li>
    @endforeach
</ul>
@endsection