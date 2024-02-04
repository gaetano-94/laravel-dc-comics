<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- /BOOTSTRAP --}}
</head>

<body class="bg-secondary">
    <h1 class="text-center py-4 text-uppercase text-white">Elenco dei Fumetti</h1>
    <div class="container d-flex flex-wrap gap-3 justify-content-center align-items-top mb-4">
        @foreach ($comics as $comic)
            <div class="card" style="width: 30rem;">
                <div class="card-body border bg-warning">
                    <h2><strong>Titolo:</strong> {{ $comic->titolo }}</h2>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info mt-2" alt="Comic">Dettaglo
                        Fumetto</a>
                    <a href="{{ route('comics.create') }}" class="btn  btn-success mt-2" alt="Comic">Crea un nuovo
                        Fumetto</a>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary mt-2"
                        alt="Comic">Modifica un nuovo
                        Fumetto</a>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
