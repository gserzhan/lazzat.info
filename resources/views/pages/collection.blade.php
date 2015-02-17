
@extends('pages')

@section('content')


        <hr class="featurette-divider">
        <div class="row">
            <div class="col-md-2">
                <div id="div_img"></div>
                <script>
                    var img_src = {!! $collection['image'] !!}
                    var img_node = document.createElement('img');
                    img_node.src = img_src;
                    img_node.setAttribute('width', '203');
                    img_node.setAttribute('class', 'featurette-image img-responsive thumbnail');
                    img_node.setAttribute('alt', "{{$collection['name']}}");
                    var image_div = document.getElementById("div_img");
                    image_div.appendChild(img_node);
                </script>
            </div>
            <div class="col-md-10">
                <h1>{{$collection['name']}} </h1>
                <p>{{$collection['description']}}</p>
            </div>
        </div>
        <hr class="featurette-divider" />
        <div class="featurette">
            @if (count($pieces)>0)
                <ul class="row">
                    @foreach($pieces as $art)

                        <li class="col-lg-4 col-md-3 col-sm-3 col-xs-4" id="image_{{ $art['id'] }}">
                            <p><strong>{{ $art['name'] }}</strong>, {{ $art['year'] }}</p>
                            <p>{{$art['type']}}, {{$art['size']}}</p>
                        </li>
                        <script>
                            var img_src = {!! $art['image'] !!}
                            var img_node = document.createElement('img');
                            img_node.src = img_src;
                            img_node.setAttribute('height', 200);
                            img_node.setAttribute('class', 'img-responsive thumbnail');
                            var image_li = document.getElementById("image_{{ $art['id'] }}");
                            image_li.appendChild(img_node);
                        </script>

                    @endforeach
                </ul>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->


            @else
            <div class="col-md-12"><h4>Collection is empty</h4></div>
            @endif
         </div>
        <hr class="featurette-divider" />


@stop
@section('script')

    <script>
        $(document).ready(function(){
            $('li img').on('click',function(){
                var src = $(this).attr('src');
                var img = '<img src="' + src + '" class="img-responsive"/>';
                $('#myModal').modal();
                $('#myModal').on('shown.bs.modal', function(){
                    $('#myModal .modal-body').html(img);
                });
                $('#myModal').on('hidden.bs.modal', function(){
                    $('#myModal .modal-body').html('');
                });
            });
        });
    </script>

@stop