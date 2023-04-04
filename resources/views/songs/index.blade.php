@extends('layouts.app')

@section('cdn')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section('page_name', 'Lista Brani')
    
@section('main_content')
  <div class="row my-3">
    <form class="col-8 d-flex">
      <input class="form-control me-2" type="text" name="term" placeholder="Search">
      <button class="btn btn-outline-primary my-0" type="submit">Search</button>
    </form>

    <div class="col-4 d-flex">
      <a href="{{ route('songs.create') }}" type="button" class="btn btn-outline-primary ms-auto">Aggiungi Brano</a>
    </div>
  </div>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
              <th scope="col"> Titolo </th>
              <th scope="col"> Album </th>
              <th scope="col"> Autore </th>
              <th scope="col"> Durata </th>
              <th scope="col"> Dettaglio brano </th>
            </tr>
          </thead>

          <tbody>
              @foreach ($songs as $song)                
                <tr>
                    <th scope="row">{{ $song->title }}</th>
                    <td>{{ $song->album }}</td>
                    <td>{{ $song->author }}</td>
                    <td>{{ $song->length }}</td>
                    <td><a href="{{ route('songs.show', ['song' => $song]) }}" class="text-center"><i class="bi bi-box-arrow-up-right"></i></a></td>
                </tr>
            @endforeach
          </tbody>
    </table>

    {{$songs->links('pagination::bootstrap-5')}}
@endsection
