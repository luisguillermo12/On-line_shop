@extends('layouts.app')
@section('content')
<div class="col-sm-8 col-sm-offset-2 text-center">
          <div class="heading">
            <h2> LV-SHOP
              <span class="veintucuatro">24</span>
            </h2>

          </div>
        </div>

<section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10">
                    <div class="blog-post single">

                        <div class="blog-post-info">
                            <h2 class="text-center"></h2>
                            <br>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="item">
                                        <img src="{{ asset($post->images->first()->route) }}" class="img-responsive">
                                    </div>
                                    <br>

                                    <div class="widget instagram-widget">

                                        <ul>
                                            
                                            @foreach($post->images as $image)
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset($image->route) }}" alt="#">
                                                </a>
                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h1>
                                        {{ $post->name }} - Price: {{ $post->price }} $
                                    </h1>
                                    <p>
                                        {{ $post->description }}
                                    </p>
                                    <h3>
                                        <i class="fa fa-phone"></i> {{ $post->user->cellphone }}
                                    </h3>
                                    
                                    <br>

                                    <h3>
                                        <i class="fa fa-whatsapp"></i> 3{{ $post->user->cellphone }}
                                    </h3>
                                </div>
                            </div>


                        </div>
            </div>
        </div>
    </div>
</div>
    </section>

@endsection