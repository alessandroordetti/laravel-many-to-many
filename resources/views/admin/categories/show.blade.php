@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row text-center">
        <div class="col-12">
            <h1>
                {{$category->name}}
            </h1>
        </div>

        <div class="col-8 m-auto">
            <img src="{{$category->img}}" alt="Immagine della categoria {{$category->name}}">
        </div>
    </div>
</div>
    
@endsection