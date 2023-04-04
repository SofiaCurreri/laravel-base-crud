@extends('layouts.app')

@section('page_name', 'Dettaglio Brano')
    
@section('main_content')
  <div class="row row-cols-3 text-light gy-2">
     <div class="col"><strong>Titolo:</strong> {{$song->title}}</div>
     <div class="col"><strong>Album:</strong> {{$song->album}}</div>
     <div class="col"><strong>Autore:</strong> {{$song->author}}</div>
     <div class="col"><strong>Editore:</strong> {{$song->editor}}</div>
     <div class="col"><strong>Durata:</strong> {{$song->length}}</div>
  </div>
  <div class="row my-5 text-light">
    <strong class="mb-3"> Copertina album:</strong>
    <img src="{{$song->poster}}" class="card-img-top" alt="album poster" style="width: 300px;">
  </div>
@endsection

