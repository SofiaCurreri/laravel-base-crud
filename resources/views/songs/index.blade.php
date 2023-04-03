@extends('layouts.app')

@section('cdn')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section('page_name', 'Lista Brani')
    
@section('main_content')
  <form class="d-flex my-4" role="search">
    <input class="form-control me-2" type="search" name="title" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>

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
