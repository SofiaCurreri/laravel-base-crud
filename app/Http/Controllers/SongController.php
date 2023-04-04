<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('term')) {
            $term = $request->get('term');
            $songs = Song::where('title', 'LIKE', "%$term%")->paginate(10)->withQueryString();
        } else {
            $songs = Song::paginate(10);
        }
        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'album' => 'nullable|string|max:50',
            'author' => 'required|string|max:50',
            'editor' => 'nullable|string|max:50',
            'length' => 'nullable|date_format:H:i:s',
            'poster' => 'nullable|string'
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'title.string' => 'Il titolo deve essere una stringa',
            'title.max' => 'Il titolo può avere al massimo 50 caratteri',

            'album.string' => 'L\' album deve essere una stringa',
            'album.max' => 'L\' album può avere al massimo 50 caratteri',

            'author.required' => 'L\' autore è obbligatorio',
            'author.string' => 'L\' autore deve essere una stringa',
            'author.max' => 'L\' autore può avere al massimo 50 caratteri',

            'editor.string' => 'L\' editore deve essere una stringa',
            'editor.max' => 'L\' editore può avere al massimo 50 caratteri',

            'length.date_format' => 'Il formato della durata deve essere di tipo time (00:00:00)',

            'poster.string' => 'L\' immagine di copertina deve essere una stringa'
        ]);

        $data = $request->all();

        $song = new Song;     
        
        //METODO 1
        // $song->title = $data["title"];
        // $song->album = $data["album"];
        // $song->author = $data["author"];
        // $song->editor = $data["editor"];
        // $song->length = $data["length"];
        // $song->poster = $data["poster"];

        //METODO 2
        $song->fill($data);
        
        $song->save();
        return redirect()->route('songs.show', $song);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'album' => 'nullable|string|max:50',
            'author' => 'required|string|max:50',
            'editor' => 'nullable|string|max:50',
            'length' => 'nullable|date_format:H:i:s',
            'poster' => 'nullable|string'
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'title.string' => 'Il titolo deve essere una stringa',
            'title.max' => 'Il titolo può avere al massimo 50 caratteri',

            'album.string' => 'L\' album deve essere una stringa',
            'album.max' => 'L\' album può avere al massimo 50 caratteri',

            'author.required' => 'L\' autore è obbligatorio',
            'author.string' => 'L\' autore deve essere una stringa',
            'author.max' => 'L\' autore può avere al massimo 50 caratteri',

            'editor.string' => 'L\' editore deve essere una stringa',
            'editor.max' => 'L\' editore può avere al massimo 50 caratteri',

            'length.date_format' => 'Il formato della durata deve essere di tipo time (00:00:00)',

            'poster.string' => 'L\' immagine di copertina deve essere una stringa'
        ]);

        
        $data = $request->all();
        $song->update($data); 

        return redirect()->route('songs.show', $song);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}