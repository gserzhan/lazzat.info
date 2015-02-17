@extends('default')

@section('content')
    <h1>Art <a href="../art">-</a></h1>

    <hr />

    {!! Form::open(['url' => 'art']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('credits', 'Credits:') !!}
        {!! Form::text('credits', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('size', 'Size:') !!}
        {!! Form::text('size', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', 'Image:') !!}
        {!! Form::textarea('image', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('year', 'Year:') !!}
        {!! Form::text('year', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('collection', 'Collection:') !!}
        {!! Form::select('collection', $collections, null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('type', 'Type:') !!}
        {!! Form::text('type', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('price', 'Price:') !!}
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add An Item', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop