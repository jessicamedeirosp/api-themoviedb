<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class GenresController extends Controller
{
    
    public function searchGenre(int $genreId) {        
        
        $genreList = Http::withToken(config('services.tmdb.token'))
                ->get("https://api.themoviedb.org/3/genre/$genreId")
                ->json();
        
        return $genreList;
        
    }
    public function searchGenreList() {        
        
        $genreList = Http::withToken(config('services.tmdb.token'))
                ->get("https://api.themoviedb.org/3/genre/movie/list")
                ->json();
        
        return $genreList;
        
    }

}
