<?php

use Illuminate\Support\Facades\Route;

Route::get('/planets', function () {
    $planets = [
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
    
    return view('planets', ['planets' => $planets]);
});

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <head>
    <title>Planeten</title>
</head>
<body>
    <h1>Planeten in ons Zonnestelsel</h1>
    
    <ul>
        @foreach($planets as $planet)
            <li>
                <h2>{{ $planet['name'] }}</h2>
                <p>{{ $planet['description'] }}</p>
            </li>
        @endforeach
    </ul>
</body>
</body>
</html>