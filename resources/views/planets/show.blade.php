<!DOCTYPE html>
<html>
<head>
    <title>{{ $planet->name }}</title>
</head>
<body>
    <h1>{{ $planet->name }}</h1>

    <p><strong>Beschrijving:</strong> {{ $planet->description }}</p>
    <p><strong>Grootte:</strong> {{ $planet->size_in_km }} km</p>

    <hr>
    <a href="/planets">Terug naar overzicht</a>
</body>
</html>