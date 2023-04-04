@extends('layouts.app')

@section('page_name', 'Dettaglio Brano')
    
@section('main_content')
  {{-- <div class="card " style="width: 18rem;">
    <img src="{{$song->poster}}" class="card-img-top" alt="album poster">   
    <div class="card-header">
        <strong>Titolo:</strong>  {{$song->title}}
    </div>
    <ul class="list-group list-group-flush ">
        <li class="list-group-item bg-dark text-light"><strong>Album:</strong> {{$song->album}}</li>
        <li class="list-group-item bg-dark text-light"><strong>Autore:</strong> {{$song->author}}</li>
        <li class="list-group-item bg-dark text-light"><strong>Editore:</strong> {{$song->editor}}</li>
        <li class="list-group-item bg-dark text-light"><strong>Durata:</strong> {{$song->length}}</li>
    </ul>   
  </div> --}}
  <div class="row row-cols-3 text-light gy-2">
     <div class="col"><strong>Titolo:</strong> {{$song->title}}</div>
     <div class="col"><strong>Album:</strong> {{$song->album}}</div>
     <div class="col"><strong>Autore:</strong> {{$song->author}}</div>
     <div class="col"><strong>Editore:</strong> {{$song->editor}}</div>
     <div class="col"><strong>Durata:</strong> {{$song->length}}</div>
  </div>
  <div class="row">
    <img src="{{$song->poster}}" class="card-img-top" alt="album poster" style="width: 300px;">
  </div>
@endsection

