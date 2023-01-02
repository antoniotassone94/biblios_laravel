@extends("layout.biblios")
@section("title","Dettaglio del libro selezionato")
@section("content")
    <h2>{{$book->title}}</h2>
    <b>Autore del libro:</b>&nbsp;{{$book->author->firstname}} {{$book->author->lastname}}
@endsection
