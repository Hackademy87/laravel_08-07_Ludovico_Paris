<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function create(){
        return view('film.create');
    }
    public function store(Request $request){
        Film::create(
            [
                'title' => $request->input('title'),
                'genre' => $request->input('genre'),
                'year' => $request->input('year'),
                'director' => $request->input('director'),
                'plot' => $request->input('plot'),  
            ]
        );
        return redirect()->route('home')->with('message', 'Nuovo film inserito correttamente!');
    
    }
    public function index(){
        $films = Film::latest()->get();

        return view('film.index', compact('films') );
    }
    
    public function show(Film $film){
        return view('film.show', compact('film'));
    }
    public function edit(Film $film, Request $request ){
        return view('film.edit', compact('film'));
       
    }
    public function update(Film $film, Request $request ){
        $film->update(
            [
                'title' => $request->input('title'),
                'genre' => $request->input('genre'),
                'year' => $request->input('year'),
                'director' => $request->input('director'),
                'plot' => $request->input('plot'),
            ]
        );
        return redirect()->route('admin.dashboard')->with('message', "Hai aggiornato $film->title");
    
    } 
    public function delete(Film $film){
        $film->delete();
        return redirect()->route('admin.dashboard')->with('message', "Hai cancellato $film->title");
    }
}
