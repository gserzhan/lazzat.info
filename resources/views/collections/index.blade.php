@extends('default')

@section('content')
    <h1>Collections <a href="collections/create">+</a></h1>
    <div id="collections">
    @if (count($collections)>0)
            <div class="row">
        @foreach($collections as $collection)

                <div class="col-md-3">
                    <a href="../collections/{{$collection['id']}}">
                        <div id="image_{{ $collection['id'] }}">
                            <strong>{{ $collection['name'] }}</strong> <br />{{ $collection['description'] }}
                        </div>
                        <script>
                            var img_src = {!! $collection['image'] !!}
                            var img_node = document.createElement('img');
                            img_node.src = img_src;
                            img_node.setAttribute('width', '203');
                            img_node.setAttribute('class', 'thumbnail');
                            var image_div = document.getElementById("image_{{ $collection['id'] }}");
                            image_div.appendChild(img_node);
                        </script>

                    </a>
                </div>
        @endforeach
            </div>
    @else
        <p>Collection is empty</p>
    @endif
    </div>
@stop