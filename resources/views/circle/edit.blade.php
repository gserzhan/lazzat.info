@extends('default')

@section('content')

    <h1>Circle <a href="../../circle">-</a></h1>

    <hr />

    {!! Form::open(['method' => 'PUT', 'url' => 'circle/'.$circle->id]) !!}
    <div class="form-group">
        {!! Form::label('caption', 'Caption:') !!}
        {!! Form::text('caption', $circle['caption'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('details', 'Details:') !!}
        {!! Form::text('details', $circle['details'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', 'Image (Recommended size: 1200x500px):') !!}
        {!! Form::textarea('image', $circle['image'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('link', 'Link:') !!}
        {!! Form::text('link', $circle['link'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Circle', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop