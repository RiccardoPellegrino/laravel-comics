@extends('layouts.app')

@section('content')
<div class="pt-5">
<div class="mio_container">
@foreach ($comics as $comic)

<div class="card" style="width: 14rem;">
    <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-white">{{$comic['title']}}</h5>
    </div>
  </div>
  @endforeach
</div>
</div>
@endsection