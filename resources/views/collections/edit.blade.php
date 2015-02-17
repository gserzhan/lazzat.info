@extends('default')

@section('content')

    <h1>Collections <a href="../../collections">-</a></h1>

    <hr />

    {!! Form::open(['method' => 'PUT', 'url' => 'collections/'.$collection->id]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', $collection['name'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description', $collection['description'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', 'Image (Recommended size: 203x110px):') !!}
        {!! Form::textarea('image', $collection['image'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Collection', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@stop