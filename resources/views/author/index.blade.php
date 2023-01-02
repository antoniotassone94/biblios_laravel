@extends("layout.biblios")
@section("title","Elenco degli autori")
@section("content")
<p><a href="{{route('author.create')}}">Crea nuovo autore</a></p>
<table class="table">
@foreach($authorList as $author)
    <tr>
        <td>{{$author->firstname}} {{$author->lastname}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('author.edit',['author' => $author->id])}}">Modifica</a>
        </td>
        <td>
            {!! Form::open(['route' => ['author.destroy', $author->id], 'method' => 'delete' ]) !!}
                {!! Form::submit('Elimina', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
@endforeach
</table>
@endsection
