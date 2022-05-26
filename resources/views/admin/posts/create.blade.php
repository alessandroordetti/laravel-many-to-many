@extends('layouts.app')

@section('content')
<h1>
    Crea un nuovo post
</h1>
<form action="{{ route('admin.posts.store') }}" method="POST">
    @csrf

    <label for="author">Author</label>
    <input type="text" name="author" id="author">
    @error('name')
        <div class="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="content">Title</label>
    <input type="text" name="title" id="title">
    @error('name')
        <div class="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="content">Image</label>
    <input type="text" name="image" id="image">
    @error('name')
        <div class="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="content">Description</label>
    <input type="text" name="description" id="title">
    @error('name')
        <div class="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="content">Date</label>
    <input type="text" name="date" id="date">
    @error('name')
        <div class="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <button type="submit">Inserisci il nuovo post</button>
</form>
@endsection