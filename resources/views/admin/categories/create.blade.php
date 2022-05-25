@extends('layouts.app')

@section('content')
<h1>
    Crea nuova categoria
</h1>
<form action="{{ route('admin.categories.store') }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    @error('name')
        <div class="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <label for="img">Immagine da inserire</label>
    <input type="text" name="img" id="img">
    @error('name')
        <div class="alert">
            {{$message}}
        </div>
    @enderror
    <br>
    <button type="submit">Inserisci la nuova categoria</button>
</form>
@endsection