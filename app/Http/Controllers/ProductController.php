<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use App\Episode;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home(){
        $genre = Genre::all();
        $movie = Movie::all();
        return view('home', ['genre' => $genre], ['movie' => $movie]);
    }

    public function product($title){
        $movie = Movie::where('movie_title', $title)->get();
        $episode = Episode::paginate(3);
        return view('product',['episode' => $episode], ['movie' => $movie] );
        
    }

    public function genre($single_genre){
        $movie = Movie::all();
        $genre = Genre::where('genre_name', $single_genre)->get();
        
        return view('category', ['movie' => $movie], ['genre' => $genre] );
    }
}
