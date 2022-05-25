@extends('layouts.app')

@section('content')
    <div class="col-12">
        @if (session('message'))
                <div>
                    {{ session('message') }}
                </div>
            @endif
    </div>

    <div class="container">
        <div class="row">
            @foreach ($category as $element)
                <div class="col-4">
                    <h1>{{$element->name}}</h1>

                    <img src="{{$element->img}}" alt="">
                </div>
            @endforeach
        </div>
    </div>
@endsection


