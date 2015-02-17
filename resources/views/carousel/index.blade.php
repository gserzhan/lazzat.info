@extends('default')

@section('content')
    <h1>Carousel <a href="carousel/create">+</a></h1>
    <div id="carousel">
        @if (count($carousel)>0)
            <div class="row">
                @foreach($carousel as $item)

                    <div class="col-md-12">
                        <a href="../carousel/{{$item['id']}}">
                                <strong>{{ $item['name'] }}</strong> {{ $item['description'] }}
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p>Carousel is empty</p>
        @endif
    </div>
@stop