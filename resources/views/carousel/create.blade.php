@extends('default')

@section('content')

    <h1>Carousel <a href="../carousel">-</a></h1>

    <hr />

    {!! Form::open(['url' => 'carousel']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', 'Image (Recommended size: 1200x500px):') !!}
        {!! Form::textarea('image', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('caption', 'Caption:') !!}
        {!! Form::text('caption', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('link', 'Link:') !!}
        {!! Form::text('link', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('active', 'Active:') !!}
        {!! Form::select('active', $active, null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add Carousel Item', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop