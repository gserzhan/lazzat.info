@extends('default')

@section('content')
    <h1>Art <a href="../../collections/{{$art['collection']}}">-</a></h1>

    <hr />
    {!! Form::open(['method' => 'put', 'url' => 'art/' . $art['id']]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', $art['name'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('credits', 'Credits:') !!}
        {!! Form::text('credits', $art['credits'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('size', 'Size:') !!}
        {!! Form::text('size', $art['size'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', 'Image:') !!}
        {!! Form::textarea('image', $art['image'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('year', 'Year:') !!}
        {!! Form::text('year', $art['year'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('collection', 'Collection:') !!}
        {!! Form::select('collection', $collections, $art['collection'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('type', 'Type:') !!}
        {!! Form::text('type', $art['type'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('price', 'Price:') !!}
        {!! Form::text('price', $art['price'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update The Item', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop