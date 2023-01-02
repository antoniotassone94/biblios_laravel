@extends("layout.biblios")
@section("title","Form per la gestione dei libri")
@section('content')
    {!! Form::model($book, [
        'route' => isset($book->id) ? ['book.update', $book->id] : 'book.store',
        'method' => isset($book->id) ? 'put' : 'post'
        ]) !!}
        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            {!! Form::label('title', 'Titolo') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            @foreach($errors->get('title') as $error)
                <span class="help-block">{{ $error }}</span>
            @endforeach
        </div>
        <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
            {!! Form::label('author_id', 'Autore') !!}
            <select name="author_id" id="author_id" class="form-select">
                <option value=""></option>
                @foreach($authorList as $author)
                    <option value="{{$author->id}}">{{$author->firstname}} {{$author->lastname}}</option>
                @endforeach
            </select>
            @foreach($errors->get('author_id') as $error)
                <span class="help-block">{{ $error }}</span>
            @endforeach
        </div>
        <div class="form-group">
            {!! Form::submit('Salva', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
    @if(isset($errorsValidation))
        {{ print_r($errorsValidation); }}
    @endif
@endsection
