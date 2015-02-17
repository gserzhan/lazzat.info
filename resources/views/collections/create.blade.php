@extends('default')

@section('content')

    <h1>Collections <a href="../collections">-</a></h1>

    <hr />

    {!! Form::open(['url' => 'collections']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('image', 'Image (Recommended size: 203x110px):') !!}
            {!! Form::textarea('image', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Collection', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop