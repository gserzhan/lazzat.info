@extends('default')

@section('content')

    <h1>Circle <a href="../circle">-</a></h1>

    <hr />

    {!! Form::open(['url' => 'circle']) !!}
    <div class="form-group">
        {!! Form::label('caption', 'Caption:') !!}
        {!! Form::text('caption', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('details', 'Details:') !!}
        {!! Form::text('details', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', 'Image (Recommended size: 200x200px):') !!}
        {!! Form::textarea('image', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('link', 'Link:') !!}
        {!! Form::text('link', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add Circle Item', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop