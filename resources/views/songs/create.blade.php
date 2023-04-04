@extends('layouts.app')

@section('page_name', 'Nuovo Brano')

@section('main_content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('songs.store') }}" method="POST" class="row gy-3 gx-5 text-light">
        @csrf

        <div class="col-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
            <div class="invalid-feedback">
                Il titolo è obbligatorio
            </div>
        </div>

        <div class="col-3">
            <label for="album" class="form-label">Album</label>
            <input type="text" class="form-control @error('album') is-invalid @enderror" id="album" name="album" value="{{old('album')}}">
            <div class="invalid-feedback">
                L' album deve essere una stringa
            </div>
        </div>

        <div class="col-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{old('author')}}">
            <div class="invalid-feedback">
                L' autore è obbligatorio
            </div>
        </div>

        <div class="col-3">
            <label for="editor" class="form-label">Editore</label>
            <input type="text" class="form-control @error('editor') is-invalid @enderror" id="editor" name="editor" value="{{old('editor')}}">
            <div class="invalid-feedback">
                L' editor deve essere una stringa
            </div>
        </div>

        <div class="col-3">
            <label for="length" class="form-label">Durata</label>
            <input type="text" class="form-control @error('length') is-invalid @enderror" id="length" name="length" value="{{old('length')}}">
            <div class="invalid-feedback">
                Durata di tipo 00:00:00
            </div>
        </div>

        <div class="col-3">
            <label for="poster" class="form-label">Copertina</label>
            <input type="text" class="form-control @error('poster') is-invalid @enderror" id="poster" name="poster" value="{{old('poster')}}">
            <div class="invalid-feedback">
                La copertina deve essere una stringa
            </div>
        </div>

        <div class="col-12 d-flex">
            <button type="submit" class="btn btn-outline-primary me-auto my-5">Salva</button>
        </div>
    </form>
@endsection