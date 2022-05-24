@extends('layouts.app')
@section('content')
<h1>
    Creazione nuova categoria
</h1>
<form action="{{ route('admin.categories.create') }}" method="POST">
    @csrf

    <label for="name">Nome categoria</label>
    <input type="text" name="name" id="name">
    <div id="nameHelp" class="form-text">Inserisci il nome della categoria che vuoi creare</div>
        @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>

    <br>
    <label for="img">Immagine</label>
    <input type="text" name="img" id="img">
    @error('img')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror

    <br>
    <button type="submit">Send</button>
</form>
@endsection