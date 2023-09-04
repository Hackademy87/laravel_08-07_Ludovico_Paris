<?php

namespace App\Providers;

use App\Models\Film;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $generi = [];
        // $films = Film::all();
        // foreach ($films as $film) {
        //     array_push($generi, $film->genre);
        // }

        // $generiFilm = array_unique($generi);

        $generiFilm = Film::distinct('genre')
                        ->orderBy('genre', 'asc')
                        ->pluck('genre');

        View::share(['generiFilm' => $generiFilm]);
    }
}