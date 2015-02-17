@extends('default')

@section('content')

    <h1>Carousel <a href="../../carousel">-</a></h1>

    <hr />

    {!! Form::open(['method' => 'PUT', 'url' => 'carousel/'.$carousel->id]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', $carousel['name'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description', $carousel['description'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', 'Image (Recommended size: 1200x500px):') !!}
        {!! Form::textarea('image', $carousel['image'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('caption', 'Caption:') !!}
        {!! Form::text('caption', $carousel['caption'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('link', 'Link:') !!}
        {!! Form::text('link', $carousel['link'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('active', 'Active:') !!}
        {!! Form::select('active', $active, $carousel['active'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Carousel', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop