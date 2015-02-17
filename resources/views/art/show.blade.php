@extends('default')

@section('content')
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">{{$art->name}}, {{$art->year}} <span class="text-muted">{{$art->type}}</span></h2>
            <p class="lead">
                {{$art->credits}}<br />
                Year: {{$art->year}} <br />
                Collection: {{$collection}}<br />
                Price: ${{$art->price}}<br />
                Size: {{$art->size}}
            </p>
            <hr />
            <p>
                {!! Form::open(['class' => 'form-inline', 'method' => 'DELETE', 'url' => 'art/' . $art->id]) !!}
                {!! Html::link('/collections/' . $art->collection, 'Back', ['class' => 'btn btn-primary', 'role' => 'button'], false) !!}
                {!! Html::link('/art/' . $art->id . '/edit', 'Edit', ['class' => 'btn btn-primary', 'role' => 'button'], false) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </p>
        </div>
        <div class="col-md-5" id="image-div">

            <script>
                var img_src = {!! $art->image !!}
                var img_node = document.createElement('img');
                img_node.src = img_src;
                img_node.setAttribute('width', '500');
                img_node.setAttribute('data-src', 'holder.js/500x500/auto');
                img_node.setAttribute('class', 'featurette-image img-responsive thumbnail');
                var image_div = document.getElementById("image-div");
                image_div.appendChild(img_node);
            </script>

        </div>
    </div>


@stop