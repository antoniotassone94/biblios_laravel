<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="author" content="Antonio Tassone">
<meta name="keywords" content="applicazione,web,software,php,laravel,html,css,javascript,libreria,utenti,libri,libro,autore,autori">
<meta name="description" content="Semplice applicazione per gestire la libreria personale degli utenti.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Biblios - @yield("title")</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="/">Biblios</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="/author">Archivio degli autori</a>
            <a class="nav-item nav-link" href="/book">Archivio dei libri</a>
        </div>
    </div>
    <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-outline-success my-2 my-sm-0" href="#">Login</a>
        <a class="btn btn-success my-2 my-sm-0" href="#">Registrati</a>
    </form>
</nav>
<h1>@yield("title")</h1>
<div id="content">
@yield("content")
</div>
</body>
</html>
