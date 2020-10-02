<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function searchMoviesUpcoming(Request $request) {        
            
        $page =  $request->query('page') ? (int) $request->query('page') : 1;
        
        $moviesUpcoming = Http::withToken(config('services.tmdb.token'))
                ->get("https://api.themoviedb.org/3/movie/upcoming?page=$page")
                ->json();

        return $moviesUpcoming;
        
    }

    public function searchMoviesTopRated(Request $request) {        
            
        $page =  $request->query('page') ? (int) $request->query('page') : 1;
        
        $moviesTopRated = Http::withToken(config('services.tmdb.token'))
                ->get("https://api.themoviedb.org/3/movie/top_rated?page=$page")
                ->json();

        return $moviesTopRated;
        
    }
    public function searchMovie(int $movieId) {        
        
        $movie = Http::withToken(config('services.tmdb.token'))
                ->get("https://api.themoviedb.org/3/movie/$movieId")
                ->json();
        $movieVideos= Http::withToken(config('services.tmdb.token'))
                ->get("https://api.themoviedb.org/3/movie/$movieId/videos")
                ->json();
        $movieVideosMerge = $movie;
        $movieVideosMerge['videos'] = $movieVideos;
        
        return $movieVideosMerge;
        
    }
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
