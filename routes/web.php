<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;

// Overzicht van alle planeten
Route::get('/planets', [PlanetController::class, 'index'])->name('planets.index');

// Detailpagina van een specifieke planeet
Route::get('/planets/{planet}', [PlanetController::class, 'show'])->name('planets.show');
 
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = [
            'mercury' => ['name' => 'Mercurius', 'description' => '...'],
            'venus' => ['name' => 'Venus', 'description' => '...'],
            'earth' => ['name' => 'Aarde', 'description' => '...'],
            'mars' => ['name' => 'Mars', 'description' => '...'],
            // ... andere planeten
        ];
        
        return view('planets.index', compact('planets'));
    }

    public function show($planet)
    {
        $planets = [
            'mars' => [
                'name' => 'Mars',
                'description' => 'Mars is de vierde planeet vanaf de Zon...',
                'diameter' => '6.779 km',
                'distance_from_sun' => '227,9 miljoen km',
                // ... meer data
            ],
            // ... andere planeten
        ];

        if (!array_key_exists($planet, $planets)) {
            abort(404, 'Planeet niet gevonden');
        }

        return view('planets.show', [
            'planet' => $planets[$planet],
            'planetSlug' => $planet
        ]);
    }
}