
@extends('pages')

@section('carousel')

      <!-- Carousel
================================================== -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                  @foreach($carousel as $item)
                  <div class="item @if ($item['active']) active @endif">
                        <img src="{{$item->image}}" alt="{{$item->name}}">
                        <div class="container">
                              <div class="carousel-caption">
                                    <h1>{{$item->name}}</h1>
                                    <p>{{$item->description}}</p>
                                    <p><a class="btn btn-primary" href="{{$item->link}}" role="button">{{$item->caption}}</a></p>
                              </div>
                        </div>
                  </div>
                  @endforeach

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
@stop

@section('content')
      <a id="#about" name="about" ></a>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->


            <!-- Three columns of text below the carousel -->
            <div class="row">
                  @foreach($circles as $circle)
                  <div class="col-lg-4">
                        <img class="img-circle" src="{{$circle->image}}" alt="{{$circle->caption}}">
                        <h2>{{$circle->caption}}</h2>
                        <p>{{$circle->details}}</p>
                        <p><a class="btn btn-default" href="{{$circle->link}}" role="button">View details &raquo;</a></p>
                  </div><!-- /.col-lg-4 -->
                  @endforeach
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->
            <a name="collection" ></a>

            <hr class="featurette-divider">

            <div class="row">
                  @foreach($collections as $collection)
                  <div class="col-md-3">
                        <h2>{{$collection['name']}} <span class="text-muted"></span></h2>
                        <p>{{$collection['description']}}</p>
                        <a href="collection/{{$collection['id']}}">
                              <div id="div_{{$collection['id']}}"></div>
                              <script>
                                    var img_src = {!! $collection['image'] !!}
                                    var img_node = document.createElement('img');
                                    img_node.src = img_src;
                                    img_node.setAttribute('width', '203');
                                    img_node.setAttribute('class', 'featurette-image img-responsive thumbnail');
                                    img_node.setAttribute('alt', "{{$collection['name']}}");
                                    var image_div = document.getElementById("div_{{ $collection['id'] }}");
                                    image_div.appendChild(img_node);
                              </script>
                        </a>
                  </div>

                  @endforeach
            </div>

            <hr class="featurette-divider">

            <div class="row">
                  <h1>Contact Us</h1>

                  <div class="col-lg-6">
                        {!! Form::open() !!}
                        <div class="form-group">
                              {!! Form::label('name', 'Your Name:') !!}
                              {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                              {!! Form::label('email', 'Email:') !!}
                              {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                              {!! Form::label('text', 'Text:') !!}
                              {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                              {!! Form::submit('Send', ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                        {!! Form::close() !!}
                  </div>
                  <div class="col-lg-6">
                        <div id="map_canvas" class="map_canvas thumbnail"></div>
                        {!!$mapJs!!}
                  </div>
            </div>

            <!-- /END THE FEATURETTES -->
@stop