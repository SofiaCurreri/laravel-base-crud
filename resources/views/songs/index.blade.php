@extends('layouts.app')

@section('page_name', 'Lista Brani')
    
@section('main_content')
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
                    <td><a href="{{ route('songs.show', ['song' => $song]) }}">Dettaglio</a></td>
                </tr>
            @endforeach
          </tbody>
    </table>
@endsection
