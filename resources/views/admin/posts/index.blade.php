@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex">
                @forelse ($posts as $post)
                    <div class="col-4">
                        <h2>
                            {{$post->author}}
                        </h2>

                        <a href="{{route("admin.posts.show", $post)}}">
                            <div>
                                <img src="{{$post->image}}" alt="">
                            </div>
                        </a>

                        <p>
                            {{$post->description}}
                        </p>
                    </div>
                @empty
                    <h2>There are no posts to show</h2>
                @endforelse
        </div>
    </div>
@endsection