@extends('default')

@section('content')
    <!-- Carousel
================================================== -->
    {!! Form::open(['class' => 'form-inline', 'method' => 'DELETE', 'url' => 'carousel/' . $carousel->id]) !!}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{!! $carousel->image !!}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>{{$carousel->name}}</h1>
                        <p>{{$carousel->description}}</p>
                        <p>
                            <a class="btn btn-primary" href="{{$carousel->link}}" role="button">{{$carousel->caption}}</a>
                            {!! Html::link('/carousel', 'Back', ['class' => 'btn btn-primary', 'role' => 'button'], false) !!}
                            {!! Html::link('/carousel/' . $carousel->id . '/edit', 'Edit', ['class' => 'btn btn-primary', 'role' => 'button'], false) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- /.carousel -->

    {!! Form::close() !!}


@stop