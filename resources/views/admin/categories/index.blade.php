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

                    <img src="{{$element->img}}" class="mb-3" alt="">

                    <div class="button-wrapper mb-3">
                        <a href="{{route("admin.categories.edit", $element )}}">
                            <button class="btn btn-success">Modfica</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


