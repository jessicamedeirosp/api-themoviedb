<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index(Request $request) {
        
            
        $page =  $request->query('page') ? (int) $request->query('page') : 1;
        
        $movies = Http::withToken(config('services.tmdb.token'))
                ->get("https://api.themoviedb.org/3/movie/upcoming?page=$page")
                ->json();
        return $movies;
        
    }
}
