@extends('default')

@section('content')
    <div class="container marketing">
    <h1>Circle <a href="/circle/create">+</a></h1>
    @if (count($circle)>0)
        <div class="row">
            @foreach($circle as $item)
            <div class="col-lg-4">
                <img class="img-circle" src="{{$item['image']}}" alt="{{$item['caption']}}" style="width: 140px; height: 140px;">
                <h2>{{$item['caption']}}</h2>
                <p>{{$item['details']}}</p>
                <p>
                    <a class="btn btn-default" href="{{$item['link']}}" role="button">View details &raquo;</a>
                    {!! Form::open(['class' => 'form-inline', 'method' => 'DELETE', 'url' => 'circle/' . $item->id]) !!}
                    {!! Html::link('/circle/' . $item->id . '/edit', 'Edit', ['class' => 'btn btn-primary', 'role' => 'button'], false) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </p>
            </div><!-- /.col-lg-4 -->
            @endforeach
        </div><!-- /.row -->
    @else
        <div class="row">
            <h3>List is empty</h3>
        </div>
    @endif
    </div>
@stop