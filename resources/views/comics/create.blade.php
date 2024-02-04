<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuovo Fumetto</title>
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- /BOOTSTRAP --}}
</head>

<body>
    <div class="container">
        <h1>Nuovo Fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Immagine</label>
                <input type="text" class="form-control" name="immagine">
            </div>
            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control" name="titolo">
            </div>
            <div class="mb-3">
                <label class="form-label">Serie</label>
                <input type="text" class="form-control" name="serie">
            </div>
            <div class="mb-3">
                <label class="form-label">Data di Vendita</label>
                <input type="text" class="form-control" name="data_di_vendita">
            </div>
            <div class="mb-3">
                <label class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="prezzo">
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea class="form-control" name="descrizione" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crea Fumetto</button>
        </form>
    </div>
</body>

</html>
