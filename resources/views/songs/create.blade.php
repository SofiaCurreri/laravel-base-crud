@extends('layouts.app')

@section('page_name', 'Nuovo Brano')

@section('main_content')
    <form action="{{ route('songs.store') }}" method="POST" class="row gy-3 gx-5">
        @csrf
        <div class="col-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="col-3">
            <label for="album" class="form-label">Album</label>
            <input type="text" class="form-control" id="album" name="album">
        </div>

        <div class="col-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>

        <div class="col-3">
            <label for="editor" class="form-label">Editore</label>
            <input type="text" class="form-control" id="editor" name="editor">
        </div>

        <div class="col-3">
            <label for="length" class="form-label">Durata</label>
            <input type="text" class="form-control" id="length" name="length">
        </div>

        <div class="col-3">
            <label for="poster" class="form-label">Copertina</label>
            <input type="text" class="form-control" id="poster" name="poster">
        </div>

        <div class="col-12 d-flex">
            <button type="submit" class="btn btn-outline-success ms-auto">Salva</button>
        </div>
    </form>
@endsection