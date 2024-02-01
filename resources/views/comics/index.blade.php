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

<body>
    <h1 class="text-center py-5 text-uppercase">Elenco Fumetti</h1>
    <div class="container d-flex flex-wrap gap-3 justify-content-center align-items-top">
        @foreach ($comics as $comic)
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h2><strong>Titolo:</strong> {{ $comic->titolo }}</h2>
                    <h3><strong>Serie:</strong> {{ $comic->serie }}</h3>
                    <h4><strong>Data di vendita:</strong> {{ $comic->deta_di_vendita }}</h4>
                    <h5><strong>Prezzo:</strong> {{ $comic->prezzo }}</h5>
                    <p class="card-text"><strong>Descrizione:</strong> {{ $comic->descrizione }}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
