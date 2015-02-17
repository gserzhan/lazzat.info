@extends('default')

@section('content')
    <h1>Art <a href="../art/create">+</a></h1>
    <div id="art">
        @if (count($pieces)>0)
            <div class="row">
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
    </div>
@stop