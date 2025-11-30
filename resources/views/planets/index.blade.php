<!DOCTYPE html>
<html>
<head>
    <title>Planeten</title>
</head>
<body>
    <h1>Alle Planeten</h1>
    <ul>
        <!-- Voor alle planeten laat een planeet zien en geef het de link mee voor de pagina -->
        @foreach ($planets as $planet)
            <li>
                <a href="/planets/{{ $planet->id }}">
                    {{ $planet->name }}
                </a>
                <small>({{ $planet->description }})</small>
            </li>
        @endforeach
    </ul>
</body>
</html>