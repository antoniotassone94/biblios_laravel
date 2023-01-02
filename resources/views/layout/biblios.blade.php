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
</head>
<body>
<a href="/">Homepage</a>&nbsp;<a href="/author">Archivio degli autori</a>&nbsp;<a href="/book">Archivio dei libri</a><br><br>
<h1>@yield("title")</h1>
<div id="content">
@yield("content")
</div>
</body>
</html>
