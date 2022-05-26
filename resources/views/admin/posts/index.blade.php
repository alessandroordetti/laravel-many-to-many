@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            @if (session('message'))
                    <div>
                        {{ session('message') }}
                    </div>
                @endif
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Autore</th>
                    <th>Categories</th>
                    <th>Descrizione</th>
                    <th>Data</th>
                    <th>
                        <a href="{{route('admin.posts.create')}}">
                            <button class="btn btn-warning">
                                Crea Post
                            </button>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
            @forelse ( $posts as $post)
                <tr>
                    <td>
                        <a href="{{route('admin.posts.show',$post)}}">
                        {{$post->title}}
                        </a>
                    </td>
                    <td>
                        {{$post->author}}
                    </td>
                    <td>
                        @foreach ($post->categories as $category)
                            {{$category->name}}
                        @endforeach
                    </td>
                    <td>
                        {{$post->description}}
                    </td>
                    <td>
                        {{$post->date}}
                    </td>
                    <td class="d-flex">
                        <a href="{{ route("admin.posts.edit", $post) }}" class="btn btn-success" >Edit</a>
                        <form action="{{route('admin.posts.destroy', $post)}}" method="POST" class="post-form-destroyer" post-title="{{$post->title}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-danger">Cancella</button>
                        </form>
                    </td>
                </tr>
                @empty
            @endforelse
    </div>

@endsection

