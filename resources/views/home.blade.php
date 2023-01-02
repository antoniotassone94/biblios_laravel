@extends("layout.biblios")
@section("title","Homepage")
@section("content")
    <h2>Elenco dei libri letti dall'utente</h2>
    @foreach($books as $book)
        {{$book->title}}&nbsp;<a href="{{route('detailBook',['id' => $book->id])}}">Guarda in dettaglio</a><br>
    @endforeach
@endsection
