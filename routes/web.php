<?php
 
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/planeten', function () {
    return ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
});
 
 
use Illuminate\Support\Facades\Route;
 
    // Hoofdpagina route - toont de welkomstpagina
    Route::get('/', function () {
        return view('welcome');
    });
 
// Route voor planeten overzicht met optionele filtering
Route::get('/planeten', function () {
    // Array met planeet data - elke planeet heeft een naam en beschrijving
    $planeten = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus', 
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
        ],
    ];
    // Controleer of er een specifieke planeet wordt opgevraagd via URL parameter
    if (request()->has('planeet')) {
        $planetName = request('planeet');
        // Maak van de array een Laravel collection voor makkelijker filteren
        // Filter de planeten op basis van de naam (hoofdletterongevoelig)
        $planeten = collect($planeten)->filter(function ($planet) use ($planetName) {
            return strtolower($planet['name']) === strtolower($planetName);
        })->values()->toArray(); // Converteer terug naar gewone array
    }
 
    // Stuur de planeten data naar de view
    return view('planeten', compact('planeten'));
});
 
?>