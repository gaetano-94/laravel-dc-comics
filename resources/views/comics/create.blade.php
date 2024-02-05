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
        <a href="{{ route('comics.index') }}" class="btn btn-primary my-2" alt="Comic">Torna alla
            lista dei Fumetti</a>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Immagine</label>
                <input type="text" class="form-control @error('immagine') is-invalid
                 @enderror"
                    name="immagine" value="{{ old('immagine') }}">
                @error('immagine')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control @error('titolo') is-invalid
                 @enderror"
                    name="titolo" value="{{ old('titolo') }}">
                @error('titolo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Serie</label>
                <input type="text" class="form-control @error('serie') is-invalid
                 @enderror"
                    name="serie" value="{{ old('serie') }}">
                @error('serie')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Data di Vendita</label>
                <input type="text"
                    class="form-control @error('data_di_vendita') is-invalid
                 @enderror"
                    name="data_di_vendita" value="{{ old('data_di_vendita') }}">
                @error('data_di_vendita')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('prezzo') is-invalid
                 @enderror"
                    name="prezzo" value="{{ old('prezzo') }}">
                @error('prezzo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea class="form-control @error('descrizione') is-invalid
                 @enderror" name="descrizione"
                    value="{{ old('descrizione') }}" id="" cols="30" rows="10"></textarea>
                @error('descrizione')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-3">Crea Fumetto</button>
        </form>
    </div>
</body>

</html>
