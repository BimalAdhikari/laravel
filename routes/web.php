<?php

use Illuminate\Support\Facades\Route;

Route::get('/planeten', function () {
    return [
        "Uranus",
        "Jupiter",
        "Mars",
        "Aarde",
        "Saturnus",
        "Pluto",
        "Neptunus",
        "Venus"
    ];
});

?>