<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="h1 mt-3">Dodaj anime</div>
        @if (!empty($saved_title))
        <div class="alert alert-success alert-dismissible fade show" role="alert">Anime {{ $saved_title }} zostało zapisane do bazy</div>
        @endif
        <form action="http://127.0.0.1:8000/api/animes" method="post">
            <div class="form-group mt-5">
                <label for="input-title">tytuł</label>
                <input id="input-title" name="title" placeholder="tytuł" type="text" class="form-control" required>
                <label for="input-description_0" class="mt-3">opis</label>
                <textarea name="description_0" id="input-description_0" cols="30" rows="10" placeholder="opis" class="form-control" required></textarea>
                <label for="input-characters" class="mt-3">postacie</label>
                <input id="input-characters" name="characters" placeholder="postacie" type="text" class="form-control" required>
                <button type="submit" class="btn btn-primary mt-3">Dodaj</button>
            </div>
        </form>
    </div>
</body>
</html>
