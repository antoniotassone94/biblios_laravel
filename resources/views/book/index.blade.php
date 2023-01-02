@extends("layout.biblios")
@section("title","Elenco dei libri")
@section("content")
<p><a href="{{route('book.create')}}">Crea nuovo libro</a></p>
<table class="table">
@foreach($bookList as $book)
    <tr>
        <td>{{$book->title}}</td>
        <td>{{$book->author->firstname}} {{$book->author->lastname}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('book.edit',['book' => $book->id])}}">Modifica</a>
        </td>
        <td>
            {!! Form::open(['route' => ['book.destroy', $book->id], 'method' => 'delete' ]) !!}
                {!! Form::submit('Elimina', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
@endforeach
</table>
@endsection
