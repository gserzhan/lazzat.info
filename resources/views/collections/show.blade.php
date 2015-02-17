@extends('default')

@section('content')
    <div class="row featurette">
        <div class="col-md-5">
            <h2 class="featurette-heading">{{$collection->name}}</h2>
            <p class="lead">
                {{$collection->description}}
            </p>
        </div>
        <div class="col-md-3" id="image-div">

            <script>
                var img_src = {!! $collection->image !!}
                var img_node = document.createElement('img');
                img_node.src = img_src;
                img_node.setAttribute('width', '203');
                img_node.setAttribute('data-src', 'holder.js/500x500/auto');
                img_node.setAttribute('class', 'featurette-image img-responsive thumbnail');
                var image_div = document.getElementById("image-div");
                image_div.appendChild(img_node);
            </script>

        </div>
        <div class="col-md-4">
            <p>
                {!! Form::open(['class' => 'form-inline', 'method' => 'DELETE', 'url' => 'collections/' . $collection->id]) !!}
                {!! Html::link('/collections', 'Back', ['class' => 'btn btn-primary', 'role' => 'button'], false) !!}
                {!! Html::link('/collections/' . $collection->id . '/edit', 'Edit', ['class' => 'btn btn-primary', 'role' => 'button'], false) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </p>
        </div>
    </div>

    @if (count($pieces)>0)
        <hr />

        @if (count($pieces)>0)
            <div class="row featurette">
                @foreach($pieces as $art)

                    <div class="col-md-3">
                        <a href="../art/{{$art['id']}}">
                            <div id="image_{{ $art['id'] }}">
                                <p><strong>{{ $art['name'] }}</strong>, {{ $art['year'] }}</p>
                            </div>
                        </a>
                        <script>
                            var img_src = {!! $art['image'] !!}
                            var img_node = document.createElement('img');
                            img_node.src = img_src;
                            img_node.setAttribute('height', '110');
                            img_node.setAttribute('class', 'thumbnail');
                            var image_div = document.getElementById("image_{{ $art['id'] }}");
                            image_div.appendChild(img_node);
                        </script>
                    </div>
                @endforeach
            </div>
        @else
            <p>List is empty</p>
        @endif

    @endif


@stop